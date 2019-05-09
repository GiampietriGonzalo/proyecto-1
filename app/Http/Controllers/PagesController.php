<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\UserList;

class PagesController extends Controller{

    public function goToHome(){
    	return view('index');
    }

    public function goToSignIn(){
    	return view('login');
    }

    public function goToSignUp(){
    	return view('register');
    }

    public function goToProfile(){
    	return view('profile');
    }

    public function goToExplore(){
        $lists = UserList::all();
    	return view('explore')->with(['lists' => $lists]);
    }

    public function goToLogin(){
        return view('login');
    }

}
