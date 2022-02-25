<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Tampo Salon</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/addProduct-style.css">
	<link rel="stylesheet" href="css/addproduct_fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/addproduct_bootstrap.min.css" />
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Satisfy&display=swap" rel="stylesheet">

</head>

<body>

	<div class="container-fluid">

	<header class="top-header">


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
    	<li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>















	<!-- <nav class="navbr navbar-expand-sm">
		<div class="logo left">
			<a href="/"><img src="logo/logo.png"></a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse colnav" id="navbarNavAltMarkup" >
		
			<div class="menu mid">
					<ul>
						<li> <a href="/" >Home</a> </li>
						<li> <a href="/services_page">Services</a> </li>
						<li> <a href="/appointment">Appointment</a> </li>
						<li> <a href="/blogs">Blogs</a> </li>
						<li> <a href="/about">About</a> </li>
					</ul>
			</div>
			<div class="menu right">
	
					<ul>
						@if ($user = Session::get('user'))
						<li class="dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> {{session::get('name')}} <span class="caret"></span>&nbsp; </a> 
                                <ul class="dropdown-menu drpmnu">
                                    <li> <a href="/panel"><i class="fa fa-user-o"></i> My Panel </a> </li>
                                    <li> <a href="/logout"><i class="fa fa-unlock-alt"></i> Logout </a> </li>
                                </ul>
                           </li>

							<li>
								<a href="/cart"> <i class="fas fa-shopping-cart"></i> </a> 
							</li>
							@else
							<li><a href="/login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
							<li><a href="/signup"><i class="glyphicon glyphicon-plus-sign"></i> Join</a></li>
							@endif
					</ul>
				
			</div>			


			
	
	</nav> -->
</header>

	@yield('content')



	</div>

</body>
</html>