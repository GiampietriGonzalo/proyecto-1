<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostsList;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';

    public function postsList(){
        return $this->belongsTo('App\PostsList');
    }
}
