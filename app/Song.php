<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SongList

class Song extends Model{
    protected $table = 'song';
    public $primaryKey = 'id';
    public $duration = 'duration'

    public function userList(){
        return $this->belongsTo('App\SongList');
    }
}
