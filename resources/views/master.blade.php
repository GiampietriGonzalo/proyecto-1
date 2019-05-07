<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>@yield('title')</title>

		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--------------===============----------------CSS STYLES----------------------------------------------------------------->
    @yield('css')

 		<!----------------------------------------------BOOTSTRAP FRAMEWORK BEGIN-------------------------------------------------->

 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!----------------------------------------------BOOTSTRAP FRAMEWORK END-------------------------------------------------->
	</head>
	
	<body style="background-color: rgb(43,48,54)">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  			<ul class="navbar-nav">
   				 <li class="nav-item active">
     				 <a class="nav-link" href="/index">Home</a>
   				 </li>
   				<li class="nav-item">
      				<a class="nav-link" href="#">Explore</a>
   				</li>
    			<li class="nav-item">
     				<a class="nav-link" href="/login">Sign In</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="/register">Sign Up</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="#">About</a>
    			</li>
          <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
          </li>
 			 </ul>
		</nav>

    @yield('content')

  </body>
</html>