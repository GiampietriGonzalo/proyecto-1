<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('explore');
    }

    public function goToLogin(){
        return view('login');
    }

}
