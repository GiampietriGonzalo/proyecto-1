<?php

use Illuminate\Database\Seeder;

class listTableSeeder extends Seeder{
	public function run(){
		for ($i = 0; $i <= 3; $i++){
		    	DB::table('lists')->insert([
		            'name' => Str::random(10)
		        ]);
		}
	}
}
