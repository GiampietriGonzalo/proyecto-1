<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    use Notifiable;

    public $primaryKey = 'id';
    public $name = 'name';
    public $email = 'email';

    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lists(){
        return $this->hasMany(SongLists::class);
    }

    public function addItem($attributes){
        $this->items()->create($attributes);
    }
}
