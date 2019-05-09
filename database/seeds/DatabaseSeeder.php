<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(userTableSeeder::class);
        $this->call(listTableSeeder::class);
        $this->call(songTableSeeder::class);
    }
}
