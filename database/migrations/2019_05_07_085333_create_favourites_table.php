<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouritesTable extends Migration{

    public function up(){
        Schema::create('favourites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('listId');
            $table->unsignedInteger('userId');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('favourites');
    }
}
