<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    
    public function goToHome(){
    	return view('index');
    }

    public function goToSignIn(){
    	return view('signIn');
    }

    public function goToSignUp(){
    	return view('signUp');
    }

    public function goToProfile(){
    	return view('profile');
    }

    public function goToExplore(){
    	return view('explore');
    }
}
