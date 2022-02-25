@extends('layouts.layout')

@section('content')
@if(session()->has('message'))

@if(session()->get('message')=='404')
    <div class="alert alert-danger">
        Incorrect Email or Password
        </a>
    </div>
@else
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </a>
    </div>
@endif
@endif

<section class="header-section">
	<div class="container-fluid">
		<div class="row">
			<div class="homesl">
				<div class="homesl-inner">
				<center>
					<h1 class="animated fadeInDown"> Welcome to Tamposalon</h1>
					<p class="animated fadeInLeft">We take acre of your style</p>

					<a href="/directAppointments" class="animated fadeInUp">Appointment</a> <br>
					<a href="/about" class="animated fadeInUp">About</a>

					
				</center>
				</div>
				
			</div>
		
		</div>
	</div>
</section>
<b class="animated fadeInRight" style="color: red; float: right; margin-top: -40px; margin-right: 20px; font-weight: bold;">Try to click the <u>"PROMOTION"</u> & win Discount</b>
<section class="promo-button">

	<div class="animated fadeInRight infinite"> 
	<a data-toggle="modal" data-target="#modalDiscount">
		<img class="animated jello infinite promo-image" src="/promotion.png" style="">
	</a>
	</div>

   
    <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
      
        <div class="modal-content">
         
          <div class="modal-header">
            <p class="heading">Discount offer:
              <strong>10% off</strong>
            </p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

      
          <div class="modal-body">

            <div class="row">
              <div class="col-3">
                <p></p>
                <p class="text-center">
                  <i class="fas fa-gift fa-4x"></i>
                </p>
              </div>

              <div class="col-9">
                <p style="color: black;">Sharing is caring. Therefore, from time to time we like to give our visitors small gifts. Today is
                  one of those days.</p>
                <p style="color: black;">
                  <strong>Get this amazing offer to get better discount. This offer is of 
                    <u>Limited Time</u>.</strong>
                </p>
                <h2>
                  <a href="/product"><span class="badge">Visit Now</span></a>
                </h2>

              </div>
            </div>
          </div>

         
          <div class="modal-footer flex-center">
            <a href="/product" class="btn btn-danger">Get it
              now
              
            </a>
            <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
       
      </div>
    </div>
   
</section>

<form>
<div class="page-center">
	<hr>
	<h1 style="text-align: center !important;"> Women Services </h1>
	<img src="/heading-bottom.png">
	<hr>
	<div class="row box">

		
		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service1.png">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Massage</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Relax those nerves with a Tampo massage. All our masseuses  </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167;"> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service2.png">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Nails</h3>
						<div class="desc">
							<div class="desc-text">
								<p> We offer a full mani pedi service, with file, shape. cuticle work, hand and foot scrub. </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167; "> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service3.png">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Makeup</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Flawless makeup to make you look and feel your best. We bring everything </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167; "> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		

	</div>
</div>

</form>
<form>
<div class="page-center">
	<hr>
	<h1> Men Services</h1>
	<img src="/heading-bottom.png">
	<hr>
	<div class="row box">
		
		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service7.jpg">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Skin Care</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Clear glowing skin is one of today’s most important hallmarks of beauty. </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167; "> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service8.jpg">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Hair</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Tampo Salon offers world’s revolutionary Hair Sculpting and Design Concepts in  </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167; "> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="services/service7.jpg">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Makeup</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Flawless makeup to make you look and feel your best. We bring everything you </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/branches" class="btn btn-dark" style="background-color: #538167; "> More Info </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	


</div>
</form>
<!-- Here we will Dynamically add Products -->

<form>
<div class="page-center">
	<hr>
	<h1> Our products</h1>
	<img src="/heading-bottom.png">
	<hr>
	<div class="row box">
		
		<div class="col-sm-3"> 
			<div class="prodesc-blocks">
				<img src="services/service9.png">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Hair Products</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Relax those nerves with a Tampo massage. All our Hair Products! </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/product" class="btn btn-dark" style="background-color: #538167; "> Show More </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="prodesc-blocks">
				<img src="services/service10.jpg">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Skin Products</h3>
						<div class="desc">
							<div class="desc-text">
								<p> We offer a full mani pedi service, with file, shape. cuticle work, hand and foot scrub. </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/product" class="btn btn-dark" style="background-color: #538167; "> Show More </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3"> 
			<div class="prodesc-blocks">
				<img src="services/service11.jpg">
				<div class="desc-box">
					<div>
						<h3 class="desc-head">Makeup Products</h3>
						<div class="desc">
							<div class="desc-text">
								<p> Flawless makeup to make you look and feel your best. We bring everything you </p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/product" class="btn btn-dark" style="background-color: #538167;"> Show More </button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		

	</div>
</div>
</form>
<hr>
<br><br>

		<hr>
			<h1 style="text-align: center;">Schedule</h1>
			<img src="/heading-bottom.png">
			<hr>
		

<section class="tampo_saloon">
	<div class="container">
		<div class="row">
			
                <ul class="slides_times">
                    <li class="ds_wtime">
                        <div class="ds_day">
                            MON
                        </div>
                        <div class="ds_whours">
                            08:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            Tue
                        </div>
                        <div class="ds_whours">
                            10:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            wed
                        </div>
                        <div class="ds_whours">
                            08:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            thu
                        </div>
                        <div class="ds_whours">
                            08:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            fri
                        </div>
                        <div class="ds_whours">
                            07:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime closed">
                        <div class="ds_day">
                            sat
                        </div>
                        <div class="ds_whours">
                            07:00-22:00
                        </div>
                    </li>
                    <li class="ds_wtime closed">
                        <div class="ds_day">
                            sun
                        </div>
                        <div class="ds_whours">
                            07:00-22:00
                        </div>
                    </li>
                </ul>
            </div>
	</div>
</section>
<br><br>




 



















<section id="work">
	<div class="content-box">
		<div class="content-title">
			<h3 class="text-center">OUR WORK</h3>
			<img src="/heading-bottom.png">
			<br><br>
		</div>

		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work1.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work2.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work3.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work4.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work5.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work6.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work7.jpg" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="img-wrapper">
						<a>
							<img src="work/work8.jpg" class="img-responsive">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section id="team">
	<div class="container">
		<br>
			<div class="row">
				<div class="col-sm-12">
					<h5>Our E-Learning</h5>
					<h2>Learn from Experts</h2>
					<p class="desc-team" style="color: #333;">
						Whatever your style, whatever colour, the TAMPOSALON E-Learning can create the perfect cut and colour for you – overseen by our experts Artistic Team.
					</p>
					<form>
						<button class="btn btn-elegant btn-lg " formaction="/elearning">E-Learning</button>
					</form>
				</div>
			</div>
	
		</div>
</section>

<br><br>
<section class="services-tampo">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<p class="text-white">NEW UPDATES</p>
				<br>
				<h2 class="text-white">LOOKING FOR MORE SERVICES</h2>
				<br><br>
				<a href="/services_page">LEARN MORE</a>
			</div>
		</div>
	</div>
</section>















<hr>
<section>
	<div class="container">
		<h1><b>How it Works</b></h1>
	<img src="/heading-bottom.png">
	<br> <br>
		<div class="row">
			<div class="col-sm-4">
				<!-- Card Light -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top"
      src="/map.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Social shares button -->
    <a class="activator waves-effect waves-light mr-4"><i class="fas fa-map-marked-alt fa-3x"></i></a>
    <!-- Title -->
    <h4 class="card-title">LOCATION</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Select your LOCATION. Choose your desired branch. Then proceed.</p>
    <!-- Link -->
   

  </div>

</div>
<!-- Card Light -->
			</div>
			<div class="col-sm-4">
				<!-- Card Light -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top"
      src="bg2.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Social shares button -->
    <a class="activator waves-effect waves-light mr-4"><i class="fas fa-object-ungroup fa-3x"></i></a>
    <!-- Title -->
    <h4 class="card-title">SERVICE</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">After chosing a salon branch & now select your DESIRED SERVICE</p>
    <!-- Link -->
    

  </div>

</div>
<!-- Card Light -->
			</div>
			<div class="col-sm-4">
				<!-- Card Light -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top"
      src="bg3.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Social shares button -->
    <a class="activator waves-effect waves-light mr-4"><i class="fas fa-calendar-alt fa-3x"></i></a>
    <!-- Title -->
    <h4 class="card-title">SHEDULE</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Set the time and book your appointment & YOU ARE DONE</p>
    <!-- Link -->
    

  </div>

</div>
<!-- Card Light -->
			</div>
		</div>
	</div>
</section>






<hr>
<br><br><br>
<div class="container bloghome">
	<div>
	<h3 class="hblog">Blogs</h3>
	<div class="row">
		
		<div class="col-sm-5">
			<div class="blogdesc">

			<h2>Cracked Heels | Home Remedies for Dry Heels</h2>
			<span> Read to find out ways you can treat your painful cracked heels, right under your own roof. Are you someone who ...  </span><a href="/blogs"><button type="button"  class="btn btn-dark">Read more</button></a> 
			</div>
		</div>
		<div class="col-sm-2">
			<center>
				<div class="blogline">
						<p></p>

					</div>
				</center>
					
						
				</div>
		<div class="col-sm-5">
			<div class="blogdesc">
			<h2>How to Take Care of Your Lips Naturally</h2>
			<span> To make sure that your lips are pink and healthy, try out these simple homemade remedies and tips to make your ... </span><a href="/blogs"><button type="button"  class="btn btn-dark">Read more</button></a>
			</div>
		</div>
	</div>
</div>
</div>
<br>
<br>

<br><br><br>


<section class="numbers text-center" id="testimonials">
	<br><br>
	<div class="container"> 
		<div class="row">
		<div class="col-md-3 col-sm-7">
			<i class="fa fa-code-branch"></i>
			<p class="count fs-35 color-fff fw-700">04</p>
			<h3 class="color-aaa" style="color: white;">BRANCHES</h3>
		</div>
		<div class="col-md-3 col-sm-7">
			<i class="fa fa-balance-scale"></i>
			<p class="count fs-35 color-fff fw-700">634</p>
			<h3 class="color-aaa" style="color: white;">+ CLIENTS</h3>
		</div>
		<div class="col-md-3 col-sm-7">
			<i class="fa fa-bell" style="color: white;"></i>
			<p class="count fs-35 color-fff fw-700">1023</p>
			<h3 class="color-aaa">+ APPOINTMENTS</h3>
		</div>
		<div class="col-md-3 col-sm-7">
			<i class="fa fa-circle"></i>
			<p class="count fs-35 color-fff fw-700">834</p>
			<h3 class="color-aaa" style="color: white;">+ REVIEWS</h3>
		</div>
		</div>
	</div>
</section>







<br><br><br>


<div id="contents">
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3 id="">What people say about TAMPOSALON</h3>
					<p class="lead pb-5">
						What people say about Tampo Salon
					</p>
					<div class="carousel slide" id="carouselServices">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic1.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Maryam Aslam</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic2.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hira Khan</h4>
										<br>
										<p class="text">
											Tampo Salon provides awesome services. I'm truly glad to work with them.
										</p>
									</div>

									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic3.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hainya Amir</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic1.jpg" style="border5-radius: 50%;">
										</div>
										<h4 class="text-dark">Maryam Aslam</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic2.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hira Khan</h4>
										<br>
										<p class="text">
											Tampo Salon provides awesome services. I'm truly glad to work with them.
										</p>
									</div>

									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic3.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hainya Amir</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic1.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Maryam Aslam</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic2.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hira Khan</h4>
										<br>
										<p class="text">
											Tampo Salon provides awesome services. I'm truly glad to work with them.
										</p>
									</div>

									<div class="col-sm-4 px-md-5">
										<div class="text-dark pb-3">
											<img src="/review/pic3.jpg" style="border-radius: 50%;">
										</div>
										<h4 class="text-dark">Hainya Amir</h4>
										<br>
										<p class="text">
											Tampo Salon is truly a resolution in the pakistan fashion industry.
										</p>
									</div>
								</div>
							</div>
						</div>

						<ol class="carousel-indicators">
							<li data-target="#carouselServices" data-slide-to="0" class="active"></li>
							<li data-target="#carouselServices" data-slide-to="1" class="1"></li>
							<li data-target="#carouselServices" data-slide-to="2" class="2"></li>
						</ol>
						<a href="#carouselServices" class="carousel-control-prev" role="button" data-slide="prev">

						<span class="carousel-control-prev-icon"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a href="#carouselServices" class="carousel-control-next" role="button" data-slide="next">

						<span class="carousel-control-next-icon"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



	<br><br>





<script type="text/javascript">
		

			// ---------For counter----------

		$('.count').counterUp({
    	delay: 10,
    	time: 1000
		});


		

</script>
@endsection