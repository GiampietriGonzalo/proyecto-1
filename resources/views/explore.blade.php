@extends('master')

@section('title')
  Lists
@endsection

@section('css')
  <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/profileStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
		
		<div class="mainContainer">
			<h1>Lists</h1>
   			<hr>
   			
   			$lists = DB::table('lists')->get();

    		@if(count($lists) > 0)
       			@foreach($lists as list)
	       			<div class="row">
			        	<div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 30vw;">
			        		<h3><a href="/songList/{{$list->id}}">{{$list->name}}</a></h3>
			            </div>
			        	<div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 10vw;">
			                Owner: DB::table('users')->where('id', $list->user_id)->value('name');
			            </div>
			        </div>
	            @endforeach
    		@else
        		<p>No lists found</p>
    		@endif
		</div>

@endsection