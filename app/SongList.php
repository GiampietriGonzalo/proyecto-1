<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User
use App\Song

class SongList extends Model{
    protected $table = 'list';
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function items(){
        return $this->hasMany('App\Song');
    }
}
