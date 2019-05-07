<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SongList

class Favourite extends Model{
  	protected $guarded = [];

    public function list(){
		return $this->belongsTo(SongList::class);
	}
}
