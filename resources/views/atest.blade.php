<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Tampo Salon</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CDN -->
<!-- --------------------------------------------------- -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- ------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- --------------CSS Plugin for SwipeImgs--------------- -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- --------------Plugin for SwipeImgs--------------- -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
 <!-- https://fontawesome.com/ -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- --------------CSS Plugin for Icons--------------- -->
  <script src="{{Config::get('app.url')}}/node_modules/select2/dist/js/select2.min.js"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/dist/css/select2.min.css"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">


	
	<link rel="stylesheet" href="css/addProduct-style.css">
	<link rel="stylesheet" href="css/addproduct_fontawesome.min.css" />
   
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css">


    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/addproduct_bootstrap.min.css" />
	
	<link rel="stylesheet" type="text/css" href="/css/style.css">


	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Satisfy&display=swap" rel="stylesheet">
	<script src="/js/navcollapse.js"></script>

	<!-- --------------Plugin for counter--------------- -->

	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.counterup.min.js"></script>


	

</head>

<body>

	<header class="header">
		<nav class="nav">
			<ul>
					<li class="logo"><a href="/"><img src="/logo/logotext.png" class="white"> <img src="/logo/logotext.png" class="black"> </a></li>
					<li><a href="/">Home</a></li>
					<li><a href="/services_page">Services</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/blogs">Blogs</a></li>
					
					<li><a href="/appointment">Appointment</a></li>

					@if ($user = Session::get('user'))
					<li><a href="/panel">{{session::get('name')}}</a></li>
					<li><a href="/logout">Logout</a></li>
					<li><a href="/cart"><i class="fas fa-shopping-cart"></i></a></li>
					
					
					@else

					<li><a href="/login">Login</a></li>
					<li><a href="/signup">Signup</a></li>
					
					@endif	
			</ul>

			<a class="nav-icon" href="javascript:void(0);">
				<span></span><span></span><span></span>
			</a>
		</nav>
	</header>

	
	<div class="full-nav">
		<div class="logo"> <a href=""><img src="/logo/logotext.png"></a> </div>
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


<div class="appointmentpage">
<center>
  <hr>
  <h1>Make an Appointment</h1>
  <hr>
    <div class="appform">
      
      <form method="POST" action="/storeappointment">
        {{ csrf_field() }}

    @if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>


@endif
@if(session()->has('message'))

@if(session()->get('message')=='404')
    <div class="alert alert-danger">
        You Need To Login First!
        </a>
    </div>
@else
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </a>
    </div>
@endif
@endif
	         <div class="form-group">
                <label for="inputname">Full Name</label>
                <input type="text" class="form-control" id="inputname" name="name" placeholder="Full Name">
          </div>

          <div class="form-group">
                <label for="inputemail">Email address</label>
                <input type="email" class="form-control" pattern=".+@gmail.com" minlength="3" maxLength="30" id="inputemail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <fieldset class="form-group">
              <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios" id="optmale" value="male" >
                      <label class="form-check-label" for="gridRadios1">
                         Male
                      </label>
                  </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radios" id="optfemale" value="female">
                    <label class="form-check-label" for="gridRadios2">
                         Female
                    </label>
                </div>
        
                </div>
              </div>
          </fieldset>

          <div class="form-group aaa">
              <label for="selectservice">Select Service</label>
                <select class="form-control abc" id="selectservice" name="selectservice"  >
                  <option selected disabled>Select Service</option>
                  <option value="FACIALS">FACIALS</option>
                  <option value="THREADING">THREADING</option>
                  <option value="BEARD">BEARD</option>
                  <option value="MASSAGE">MASSAGE</option>
                  <option value="Hair">Hair</option>
                  <option value="MAKEUP">MAKEUP</option>
                </select>
          </div>


          <div class="form-group row">
              <label for="example-datetime-local-input" class="col-2 col-form-label">Date</label>
              <div class="col-10">
                 <input class="form-control" type="date" min='1899-01-01T13:45:00' max='2000-13-13T13:45:00'  id="date_time" name="date_time">
              </div>
          </div>
          <div class="form-group row">
              <label for="example-datetime-local-input" class="col-2 col-form-label">Time</label>
              <div class="col-10">
                 <input class="form-control" type="time" min='10:00:00' max='20:00:00'  id="time" name="time">
              </div>
          </div>



          <div class="form-group">
                <label for="inputcomment">Additional Comment</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Addtitional comments(optional)">
          </div>

         
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

</center>
<hr>
</div>
<br>
<br>







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

	</div>
<script type="text/javascript">
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date_time").setAttribute("min", today);
</script>

<script >
  $(document).ready(function() {
    $('#selectservice').select2();
});
</script>
</body>
</html>