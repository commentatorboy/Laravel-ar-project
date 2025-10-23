<?php

namespace App\Http\Controllers;

use App\ARObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

class ARObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ARObjects = ARObject::all();
        return view('index', compact('ARObjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * Sidenote: https://laravel.com/docs/5.7/filesystem#file-uploads
     * Use the storage::download to download the files and store them and use them in the create.
     */

    public function store(Request $request)
    {
        //For file upload. Although not required
        //get the .glb files only. the mime types etc. validation did not work.
        $file_text = $request->request->get("ar_object");
        if($file_text){

            $file = request()->validate([
                'ar_object' => 'regex:/(\.glb)/',

            ]);
        }
        else{
            $file = '';
        }

        //if there is an text in this then try and validate.
        $link_text = $request->request->get("arobject_link");

        if($link_text){
            $link = request()->validate([
                'arobject_link' => 'url | regex:/\.glb/'
            ]);
        }
        else{
            $link = '';
        }

        if(!$file){
            $file = $link;
        }

        /* *
        * Steps
        * 1: post reqst (here)
        * 2: generate marker ID (here)
        * 3: save in db (here)
        * 4: generate qr (in create.blade.php)
        */

        //create random string to represent the ID for the
        $random = str_random(5);

        //use request()->all() to get all requests like token etc.

        //can create mass assignment exception because it is not fillable/guarded.
        //go to the model and create a variable called fillable and add them to include them.

        //Project::create($attributes);
        $ARObject = new ARObject();
        $ARObject->link = $link;
        $ARObject->uid = $random;
        $ARObject->title = "default";

        $ARObject->save();


        $file = $request->file('ar_object');
        //note that glb files is recognized as a .bin file in laravel.
        $file->move('uploads/', $random . '.glb');

        //Generate QRcode
        $qrcode = new BaconQrCodeGenerator;
        $QrCode = $qrcode->format('svg')->size(100)->generate('https://internet-guiden.dk/ARObject/'.$random, '../public/uploads/'.$random.'.svg');

        return view('create',compact('QrCode','random'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ARObject  $aRObject
     * @return \Illuminate\Http\Response
     */
    public function show(string $uid)
    {
        //
        $ARObject = ARObject::where('uid', $uid)->first();
        if(!$ARObject){
            //if none found then return error
            abort(404, 'Did not find ARObject');
        }
        return view('show', array('ar_object' => $ARObject));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ARObject  $aRObject
     * @return \Illuminate\Http\Response
     */
    public function edit(ARObject $aRObject)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ARObject  $aRObject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ARObject $aRObject)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ARObject  $aRObject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ARObject $aRObject)
    {
        //

    }
}
