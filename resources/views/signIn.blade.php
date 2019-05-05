@extends('master')

@section('title')
  Sing in!
@endsection

@section('css')
  <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/signStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
		<div class= "container-fluid" style="width: 68%; padding-left: 2%;padding-right: 2%;margin-bottom: 10%;">
		  <div class="form-group">
        <label for="usr">Name</label>
        <input type="text" class="form-control" id="usr" style="width: 100%">
      </div>
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" style="width: 100%">
      </div>
      <button type="button" class="btn btn-dark" style="width: 100%; border-color: grey;">Sign in now!</button>
      <hr style="background-color: white">
      <button type="button" class="btn btn-light" style="width: 100%; border-color: grey;">Sign in with Gmail!</button>
      <hr style="background-color: white">
      <button type="button" class="btn btn-primary" style="width: 100%; border-color: grey;">Sign in with Facebook!</button>
    </div>

@endsection