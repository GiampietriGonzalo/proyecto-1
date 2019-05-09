<?php

use Illuminate\Database\Seeder;

class songTableSeeder extends Seeder{
    public function run(){
        for ($i = 0; $i <= 3; $i++){
        	$list = DB::table('lists')->first();
	        DB::table('songs')->insert([
	            'name' => Str::random(10),
	            'duration' => mt_rand(0,9),
	            'list_id' => $list->id
	        ]);
    	}
    }
}
