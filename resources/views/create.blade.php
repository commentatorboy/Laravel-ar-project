@extends('layout')

@section('content')



    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
        <form method="POST" action="/ARObject" enctype="multipart/form-data" role="form">
        {{ csrf_field() }}
            <div class="container">
                <h1>Upload or link the 3D object </h1>
                <div class="columns">
                    <div class="column file has-name">
                        <div class="field">
                            <div class="file has-name">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="ar_object">
                                    <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Choose a file…
                                    </span>
                                    </span>
                                    <span class="file-name">
                                    insert file name here
                                </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <input name="arobject_link" class="input" type="text" placeholder="Link to the file ex. https://dropbox.com/file.glb">
                        <p>Currently supported file types: .glb</p>
                    </div>
                </div>
                <div class="control">
                    <button type="submit" class="button is-primary is-large">Upload</button>
                </div>
            </div>
        </form>


        @if($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (isset($random))
        <div class="visible-print text-center">
            <img src="{{asset('/wee3d/public/uploads/'.$random.'.svg')}}" alt="qrCode">
            <p>Scan me to go to the web app page {{Request::url() . '/' .$random}} </p>
        </div>
        @endif

        </div>
    </section>
@endsection
