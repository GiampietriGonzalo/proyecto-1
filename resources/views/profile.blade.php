@extends('master')

@section('title')
  My profile!
@endsection

@section('css')
  <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/profileStyle.css') }}" rel="stylesheet">
@endsection

@section('content')

		<div class="row" style="width: 100%">
  			<div class="column" style="bottom-margin:2vh; width: 21%;">
  				<div class="card" style="background-color: rgb(54,59,64);">
 					  <img class="card-img-top" src="url(http://localhost:8000/images/Joey.jpg)" alt="Card image">
  				 	  <div class="card-body">
    				  	<h4 class="card-title">Joey Ramone</h4>
   					  	<p class="card-text">Ramones's vocalist.</p>
  				  	</div>
  				</div>
  			</div>

  			<div class="column" style="width: 77%;">
  			   <div class="container-fluid">
              My Lists
              <br>
              <hr>
              <div class="divList">
                <div class="row">
                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 30vw;">
                    Song Name: Now I wannna sniff some glue!
                  </div>

                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 10vw;">
                    Duration: 3 min.
                  </div>
                </div>
              </div>

              <div class="divList">
                <div class="row">
                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 30vw;">
                    Song Name: I wannna be well
                  </div>

                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 10vw;">
                    Duration: 3 min.
                  </div>
                </div>
              </div>

              <div class="divList">
                <div class="row">
                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 30vw;">
                    Song Name: I wanna be sedated
                  </div>


                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 10vw;">
                    Duration: 3 min.
                  </div>
                </div>
              </div>

              <div class="divList">
                <div class="row">
                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 30vw;">
                    Song Name: I don't wanna go down to the basement.
                  </div>

                  
                  <div class="column" style="padding-left: 1.5vw; padding-right: 1.5vw; width: 10vw;">
                    Duration: 3 min.
                  </div>
                </div>
              </div>

  			   </div>
        </div>
		</div>

@endsection
