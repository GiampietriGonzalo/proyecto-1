<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User

class userProfile extends Model{
    public $primaryKey = 'id';
    public $name = 'name';
    public $username = 'username';
    public $email = 'email';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
