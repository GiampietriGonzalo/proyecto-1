<?php

use Illuminate\Database\Seeder;

class userListsTableSeeder extends Seeder{

    public function run(){
        $lists = DB::table('lists')->get();
        $users = DB::table('users')->get();
    	if(count($lists)>0 && count($users)>0){
    		foreach($lists as $list){
    			$user = DB::table('users')->first();
		        DB::table('userLists')->insert([
		            'listId' => $list->id,
		            'userId' => $user->id
		        ]);
	    	}
    	}
    }
}
