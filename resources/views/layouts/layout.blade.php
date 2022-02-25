<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Tampo Salon</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CDN -->
    <link rel="icon" href="/titlelogo.png" type="image/x-icon">

 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- --------------CSS Plugin for Icons--------------- -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

	<!-- --------------CSS Plugin for SwipeImgs--------------- -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- --------------Plugin for SwipeImgs--------------- -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>

	

	
	<link rel="stylesheet" href="css/addProduct-style.css">
	<link rel="stylesheet" href="css/addproduct_fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css">


    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/addproduct_bootstrap.min.css" />
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Satisfy&display=swap" rel="stylesheet">
	<script src="/js/navcollapse.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- --------------Plugin for counter--------------- -->

	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.counterup.min.js"></script>

<!-- 	-------------------MDB CDN------------------ -->
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	

</head>

<body>

	<header class="header">
		<nav class="nav">
			<ul>
					<li class="logo"><a href="/"><img src="/logo/logotext.png" class="white"> <img src="/logo/logotext.png" class="black"> </a></li>
					<li class="menu-it"><a href="/">Home</a></li>
					<li class="menu-it"><a href="/branches">Services</a></li>
					<li class="menu-it"><a href="/about">About</a></li>
					<li class="menu-it"><a href="/blogs">Blogs</a></li>
					
					<li class="menu-it"><a href="/directAppointments">Appointment</a></li>
					@if ($user = Session::get('user'))
					<li class="menu-it"><a href="/elearning">E-Learning</a></li>
					
					<li class="menu-it pro-name-menu"><a href="/panel" style="">{{session::get('name')}}</a></li>
					<li class="menu-it"><a href="/logout">Logout</a></li>
					<li class="menu-it"><a href="/cart"><i class="fas fa-shopping-cart"></i></a></li>
					<li class="menu-it" style="margin-left: 0px;">
						<a href="/notifications"><i class="fas fa-bell"><span class="badge badge-dark">{{session::get('noft')}}</span></i></a>
					</li>


					
					
					@else

					<li class="menu-it"><a href="/login">Login</a></li>
					<li class="menu-it"><a href="/signup">Signup</a></li>
					
					@endif	
			</ul>

			<a class="nav-icon" href="javascript:void(0);">
				<span></span><span></span><span></span>
			</a>
		</nav>
	</header>

	
	<div class="full-nav">
		<div class="logo"> <a href="/" style="color: white;"><h5>TAMPOSALON<b style="color: red; font-size: 50px;">.</b></h5></a> </div>
		<nav class="nav2">
			<ul>
				<li> <a href="/"><span>01.</span>HOME</a> </li>
				<li> <a href="about"><span>02.</span>ABOUT</a> </li>
				<li> <a href="/deals/men_services"><span>03.</span>MEN SERVICES</a> </li>
				<li> <a href="/deals/women_services"><span>04.</span>WOMEN SERVICES</a> </li>
				<li> <a href="/cart"><span>05.</span>CART</a> </li>
				<li> <a href="/product"><span>06.</span>PRODUCTS</a> </li>
				@if ($user = Session::get('user'))
				<li> <a href="/panel"><span>07.</span>{{session::get('name')}}</a> </li>
				<li> <a href="/logout"><span>08.</span>LOGOUT</a> </li>

				@else
				<li> <a href="/login"><span>07.</span>LOGIN</a> </li>
				<li> <a href="/signup"><span>08.</span>SIGNUP</a> </li>
				@endif	
			</ul>
		</nav>

		<ul class="socail-icons list-inline">
			<li><a href=""><i class="ti ti-facebook"></i></a></li>
			<li><a href=""><i class="ti ti-twitter"></i></a></li>
			<li><a href=""><i class="ti ti-google"></i></a></li>
			<li><a href=""><i class="ti ti-linkedin"></i></a></li>
			<li><a href=""><i class="ti ti-instagram"></i></a></li>
		</ul>

		<div class="corner-circle">
			<a href="javascript:void(0);" class="nav-close"> <span></span> <span></span></a>
		</div>

	</div>

	


	@yield('content')

<a href="#" class="gotopbtn animated fadeInUp"><i class="fas fa-chevron-up"></i></a>



    <!-- footer start -->
    <footer>
        <div class="ds_wrapper footer_section">
            <div class="container-fluid">
                <div class="row">
                    <!--  buy now -->
                    <div class="col-sm-3 col-lg-3">
                        <h4 class="widget-title">
								our products
							</h4>
                        <div class="textwidget">
                            <p>
                                If you come all the way down here, you probably like our
                                <b>
										TAMPO
									 SALON. </b>To help you find where you can buy our products, Simply click the button below.
                            </p>
                        </div>
                        <div class="footer_button">
                            <a href="/product" target="_blank">
									BUY NOW
								</a>
                        </div>
                    </div>
                    <!--  buy now end-->
                    <!-- instagram-->
                    <div class="col-sm-3 col-lg-3">
                        <h4 class="widget-title">
								TAGGED #TAMPOSALON ON INSTAGRAM
							</h4>
                        <div class="photo_tiles">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="image" src="/socialsfooter/img1.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="" src="/socialsfooter/img2.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="" src="/socialsfooter/img3.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="" src="/socialsfooter/img4.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="" src="/socialsfooter/img5.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tampo.0/">
                                        <img alt="" src="/socialsfooter/img6.jpg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  instagram end-->
                    <!-- about us-->
                    <div class="col-sm-3 col-lg-3">
                        <h4 class="widget-title">
								about us
							</h4>
                        <div class="textwidget">
                            <p>
                                TAMPO SALON is a vintage design barber that focuses on your Styling best experience.
                            </p>
                            <ul class="contact">
                                <li>
                                    <i class="fa fa-phone">
										</i>(+92) 313 5074000
                                </li>
                                <li>
                                    <i class="fa fa-envelope">
										</i>info@tamposalon.com
                                </li>
                                <li>
                                    <i class="fa fa-home">
										</i>www.tamposalon.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  about us end-->
                    <!-- opening time-->
                    <div class="col-sm-3 col-lg-3">
                        <h4 class="widget-title">
								OPENING TIMES
							</h4>
                        <div class="textwidget">
                            <ul class="opening_times">
                                <li>
                                    <span class="day">
											Monday
										</span>
                                    <span class="time">
											08:00 - 15:00
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Tuesday
										</span>
                                    <span class="time">
											10:00 - 16:00
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Wednesday
										</span>
                                    <span class="time">
											08:00 - 15:00
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Thursday
										</span>
                                    <span class="time">
											08:00 - 18:00
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Friday
										</span>
                                    <span class="time">
											07:00 - 19:00
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Saturday
										</span>
                                    <span class="time">
											Closed
										</span>
                                </li>
                                <li>
                                    <span class="day">
											Sunday
										</span>
                                    <span class="time">
											closed
										</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
  
    <div class="ds_wrapper copyright_footer">
        
            <center>
                <div class="copyright_area">
                    <p>
                        trim your beard at <img alt="" src="images/footer_icon.png"> the Tampo saloon
                    </p>
                    <div id="copyright">
                        The TampoSaloon @2020 by
                        <a href="/">
								Hasham & Faisal
							</a>
                    </div>
                </div>
           </center>
        
    </div>

























<!-- 	<div class="row footer">
		
			<div class="col-sm-3">
				 <h1>Tampo Salon</h1>

				<div class="footlinks">
					<ul>
						<li><a href="/appointment">Contact us</a></li>
						<li><a href="/about">About </a></li>
						<li><a href="/">Private Policy</a></li>
						<li><a href="/">Terms and Conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="getapp">
					<STRONG>Get TampoSalonsdfsdf On The Go:</STRONG>
					<p>Visit App Store and Google Play to download TampoSalon offical app:</p>
					
					<a href="#"> <img src="googleplay.png"> </a>
				</div>
			</div>
			<div class="col-sm-3">
				
				<div class="social">
					<strong> Follow us: </strong> <br>
					<a href="https://www.facebook.com/Faisalfaiz316/"target="_blank"> <img src="fb.png"> </a>
					
				</div>
			</div>
		
	</div> -->

	</div>

</body>
</html>