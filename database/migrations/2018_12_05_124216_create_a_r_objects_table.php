<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateARObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_r_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uid'); //unique id for the "code" this is used to get the link assosiated, from the url
            $table->text('title'); //the title, to show all of it (althought not nessesary)
            $table->text('link'); //the link to the file (or the file source)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_r_objects');
    }
}
