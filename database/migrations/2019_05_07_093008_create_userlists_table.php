<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserlistsTable extends Migration{
   
    public function up(){
        Schema::create('userlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->$table->unsignedInteger('listId');
            $table->$table->unsignedInteger('userId');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('userlists');
    }
}
