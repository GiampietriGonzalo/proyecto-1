<?php

use Illuminate\Database\Seeder;

class userListsTableSeeder extends Seeder{

    public function run(){
    	if(count($list)>0 && count($users)>0){
    		foreach($userlists as userlist){
    			$userIndex = Int::Random(count($users));
    			$user = DB::table('users')->find(userIndex);
		        DB::table('userLists')->insert([
		            'listId' => $userlist->id,
		            'userId' => $user->id
		        ]);
	    	}
    	}
    }

}
