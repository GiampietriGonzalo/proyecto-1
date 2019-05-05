<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PostsList extends Model
{
    protected $table = 'postsList';
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

}
