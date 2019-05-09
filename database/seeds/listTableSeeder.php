<?php

use Illuminate\Database\Seeder;

class listTableSeeder extends Seeder{
	public function run(){
		$user = DB::table('users')->first();
		for ($i = 0; $i <= 3; $i++){
		    	DB::table('lists')->insert([
		            'name' => Str::random(10),
		            'user_Id' => $user->id
		        ]);
		}
	}
}
