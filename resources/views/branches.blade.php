@extends('layouts.layout')

@section('content')



<section class="bg-banner">
    <div class="container">
       <div class="position-center">
          <div class="benifit-title">
       	<b style="font-size: 40px;">Select Branch for Services</b> 
       	</div>
       	<form role="form" class="booking-form" method="POST" action="/search">
            {{ csrf_field() }}
          <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputCity"><b>Select Salon</b></label>
		      <input type="text" class="form-control" id="inputCity" placeholder="Tampo Salon" disabled="">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState"><b>Select Branch</b></label>
		      <select id="inputState" name="Branch" class="form-control">
		        <option selected>Choose...</option>
		        <option value="Sadar">Sadar, Rawalpindi</option>
		        <option value="CM">Commercial Market, Rawalpindi</option>
		        <option value="DHA">DHA, Rawalpindi</option>
		        <option value="E11">Sector E11, Islamabad</option>
		        <option value="F8">Sector F8, Islamabad</option>
		        <option value="F9">Sector F9, Islamabad</option>
		        <option value="F11">Sector F11, Islamabad</option>
		        <option value="G10">Sector G10, Islamabad</option>
		        <option value="H8">Sector H8, Islamabad</option>
		        <option value="H11">Sector H11, Islamabad</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip"><b>Search Here</b></label>
		      <button type="submit" class="form-control" class="btn">Search</button>
		    </div>
		  </div>
		</form>
       </div>
    </div>
 </section>



<section>

	<div class="container">
		<hr>
<h4><b>GET LOCATION:</b></h4>
<hr>
	<div class="map-container"><div class="gmap_canvas"><iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=COMSATS WAH&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebayproxy.net/">pirate bay proxy</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}</style></div>
	</div>
</section>


<!-- <section>
	<div class="container">
<div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
</div>
</section> -->


</section>

@endsection