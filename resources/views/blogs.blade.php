@extends('layouts.layout')

@section('content')


<section class="blog-banner">
    <div class="container">
       <div class="position-center">
          <div class="blog-title">
          	
       		<p><b style="font-size: 40px; font-weight: bold;">OUR BLOGS</b></p>
       		
       	</div>
       </div>
     </div>
</section>


<section>
	<div class="container">
		<hr>
		<h3><b>Our Recent Blogs</b></h3>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="/blog/heels-cracked.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <a href="/blog_detail" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" style="color: white; padding: 10px;"><i
      class="fas fa-angle-double-right"></i>Read More</a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Cracked Heels</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Are you someone who suffers from cracked heels and are not sure how to repair them? For most of us...</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2020</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
            class="far fa-comments pr-1"></i>12</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
          </i>21</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
    </ul>
  </div>

</div>
<!-- Card -->
			</div>
			<div class="col-sm-4">
				<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="/blog/heels-cracked.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <a href="/blog_detail" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" style="color: white; padding: 10px;"><i
      class="fas fa-angle-double-right"></i>Read More</a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Cracked Heels</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Are you someone who suffers from cracked heels and are not sure how to repair them? For most of us...</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2020</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i
            class="far fa-comments pr-1"></i>12</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1">
          </i>21</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
    </ul>
  </div>

</div>
<!-- Card -->
			</div>
			<div class="col-sm-4">
				
			</div>
		</div>
	</div>
</section>



<a href="/blog_detail">Click me</a>

@endsection