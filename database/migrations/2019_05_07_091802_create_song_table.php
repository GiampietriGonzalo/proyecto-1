<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongTable extends Migration{
    public function up(){
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('list_id');
            $table->string('name');
            $table->string('duration');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('songs');
    }
}
