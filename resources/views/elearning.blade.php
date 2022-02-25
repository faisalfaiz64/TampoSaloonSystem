@extends('layouts.layout')

@section('content')






<section class="el-banner">
    <div class="container">
       <div class="position-center">
          <div class="el-title">
       	<b>E-Learning Sessions</b> 
       	</div>
       </div>
     </div>
</section>      


<section>
	<div class="container">
		<hr>
		<h3><b>Get E-Learning Sessions</b></h3>
		<hr>
		<div class="row">
			
			

			
			  <div class="col-lg-4 col-md-12 mb-4">

			    
			    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">

			     
			        <div class="modal-content">

		
			          <div class="modal-body mb-0 p-0">

			            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			              <iframe width="871" height="490" src="https://www.youtube.com/embed/PrRTB_tm25g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>

			          </div>

		
			          <div class="modal-footer justify-content-center">
			           

			            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>


			          </div>

			        </div>
			

			      </div>
			    </div>
			

			    <a data-toggle="modal" data-target="#modal1">
			    	<img class="img-fluid z-depth-1" src="/e-thumbs/video1.jpg" alt="video"
			        data-toggle="modal" data-target="#modal1">
			        <center>  <p style="color: black; font-weight: bold; padding: 5px 0px;">Tampo Salon - how to's - Take Home Lessons</p></center>
			    </a>
			      
			  </div>
		

		
			  <div class="col-lg-4 col-md-6 mb-4">

			 
			    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">

			
			        <div class="modal-content">

		
			          <div class="modal-body mb-0 p-0">

			            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			              <iframe width="871" height="490" src="https://www.youtube.com/embed/vE9-oRQBkFM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>

			          </div>

		
			          <div class="modal-footer justify-content-center">
			           

			            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

			          </div>

			        </div>
			      

			      </div>
			    </div>
		

			    <a data-toggle="modal" data-target="#modal6">
			    	<img class="img-fluid z-depth-1" src="/e-thumbs/video2.jpg" alt="video">
			         <center>  <p style="color: black; font-weight: bold; padding: 5px 0px;">Haircut Lesson for Beginners - TampoSalon</p></center>
			    </a>

			  </div>
	

	
			  <div class="col-lg-4 col-md-6 mb-4">

		
			    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			      <div class="modal-dialog modal-lg" role="document">

			 
			        <div class="modal-content">

		
			          <div class="modal-body mb-0 p-0">

			            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			              <iframe width="871" height="490" src="https://www.youtube.com/embed/wd096DLuw1o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>

			          </div>

		
			          <div class="modal-footer justify-content-center">
			            

			            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

			          </div>

			        </div>
			     

			      </div>
			    </div>
			

			    <a data-toggle="modal" data-target="#modal4">
			    	<img class="img-fluid z-depth-1" src="/e-thumbs/video3.jpg" alt="video"
			        >
			    <center>  <p style="color: black; font-weight: bold; padding: 5px 0px;">Why You Always See Yourself As "UGLY" - TampoSalon</p></center>
			</a>

			  </div>
		

			</div>
	
	
	</div>
</section>





@endsection