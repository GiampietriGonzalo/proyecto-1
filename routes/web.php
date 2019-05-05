<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PagesController@goToHome');
Route::get('/index', 'PagesController@goToHome');
Route::get('/signIn', 'PagesController@goToSignIn');
Route::get('/signUp', 'PagesController@goToSignUp');
Route::get('/explore', 'PagesController@goToExplore');
Route::get('/profile', 'PagesController@goToProfile');
