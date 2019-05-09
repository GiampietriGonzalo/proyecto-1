<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model{
    public function getList(){
        return $this->belongsTo('App\List');
    }
}
