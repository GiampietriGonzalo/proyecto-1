@extends('master')

@section('title')
  Main page
@endsection

@section('css')
  <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/indexStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
		
		<div class="mainContainer" style="background-image: url(../images/johnny1.jpg);">
			
			 <div class="row">
  				<div class="col">
  					Watch the best playlists HERE!<br>
					Everyone uploads their favourite tracks.<br>
					Dylan arreglá la cama de Henry. <br>
					Just for <b>YOU!</b>
  				</div>
  				<div class="col"></div>
  				<div class="col">Watch the best playlists HERE!<br>
					Everyone uploads their favourite tracks.<br>
					Dylan arreglá la cama de Henry. <br>
					Just for <b>YOU!</b></div>
			</div> 
		</div>

@endsection
