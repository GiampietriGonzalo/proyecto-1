<?php

use Illuminate\Database\Seeder;

class songTableSeeder extends Seeder{
    public function run(){
        for ($i = 0; $i <= 3; $i++){
	        DB::table('song')->insert([
	            'name' => Str::random(10),
	            'duration' => mt_rand(0,9)
	        ]);
    	}
    }
}
