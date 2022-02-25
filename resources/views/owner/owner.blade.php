@extends('layouts.layout')
@section('content')

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

<section class="owner-banner">
    <div class="container">
       <div class="position-center">
          <div class="owner-title">
          	<img src="/images/owners/{{$info['img']}}">
       		<p><b style="font-size: 40px;">{{$info['Salon_name']}}</b></p>
       		<p>(Owner)</p>
       	</div>
       </div>
     </div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 owner-per-info">
				<center>
					<h5>Profile Info.</h5>
					<table class="table table-borderless">
						<thead style="background: #292b2c;">
							<tr>
								<th>Salon Branch:</th>
								<th>{{$info['area']}}</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Name:</th>
								<th>{{$info['Salon_name']}}</th>
							</tr>
							<tr>
								<th>Email:</th>
								<th>{{$info['email']}}</th>
							</tr>
							<tr>
								<th>Contact:</th>
								<th>{{$info['phone_no']}}</th>
							</tr>
							
						</tbody>
					</table>
				</center>
			</div>
			<div class="col-sm-6">
				<center><h5><b>Dashboard</b></h5></center>
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="btn-owner">
								<center>
									<a href="" data-toggle="modal" data-target="#addservices"><img src="/dash/617 - Manage Data.png" class="img-fluid" ></a>
									<br>
									<div class="owner-menu-clicks">
										<a href="" data-toggle="modal" data-target="#services">Services</a>
									</div>
								</center>
							</div>
						</div>
						<div class="col-sm-6">
						<div class="btn-owner">
								<center>
									<a href="" data-toggle="modal" data-target="#productsmodel"><img src="/dash/630 - Edit.png" class="img-fluid" ></a>
									<br>
									<div class="owner-menu-clicks">
										<a href="" data-toggle="modal" data-target="#promotion">Promotions</a>
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="btn-owner">
								<center>
									<a href="" href="" data-toggle="modal" data-target="#appoint"><img src="/dash/636 - Checklist.png" class="img-fluid" ></a>
									<br>
									<div class="owner-menu-clicks">
										<a href="" href="" data-toggle="modal" data-target="#appointments">Appointements</a>
									</div>
								</center>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>

  <div class="container">
    <hr>
<h4><b>Branch Location:</b></h4>
<hr>
  <div class="map-container"><div class="gmap_canvas"><iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=COMSATS WAH&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebayproxy.net/">pirate bay proxy</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}</style></div>
  </div>
</section>


<!-- -----------------Model for Services------------------ -->

<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLabel">Services</h5>
      </div>
      <div class="modal-body">
       <center>
        <form >
       	<button type="submit" class="btn btn-dark" formaction="/owner_services_view/{{$info['id']}}">All Services</button>
        </form>
       	<button class="btn btn-dark" data-toggle="modal" data-target="#addservices">Add Services</button>
       </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- -----------------Model for add Services------------------ -->
<div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLabel">Add Services</h5>
      </div>
      <div class="modal-body">
       <center>
       	<button class="btn btn-dark" data-toggle="modal" data-target="#menservices">Men Services</button>
       	<button class="btn btn-dark" data-toggle="modal" data-target="#womenservices">Women Services</button>
       </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        					<!-- model for men services -->
 <form action="/M_S_add_by_owner/{{$info['id']}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
  {{ csrf_field() }}
        <div class="modal fade" id="menservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Man Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="name">Service Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="category" >Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="category">
                      <option selected>Select category</option>
                      <option value="1">Facials</option>
                      <option value="2">Make Up</option>
                      <option value="3">Threading</option>
                      <option value="4">Hair</option>
                      <option value="5">Beard</option>
                      <option value="6">Massage</option>
                    </select>
                      </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Service Price</label>
                    <input id="price" name="price" type="Number" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                      <input id="file" name="pic" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD SERVICE IMAGE"
                    onclick="document.getElementById('file').click();"
                  />
                        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
        <!-- ------------------------------------------------------------------------- -->

       							 <!-- model for women services -->
    <form action="/W_S_add_by_owner/{{$info['id']}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
          {{ csrf_field() }}
        <div class="modal fade" id="womenservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Women Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             
              <div class="modal-body">
                 <div class="form-group">
                   <label style="color: black;" for="name">Service Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="category" >Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="category">
                      <option selected>Select category</option>
                      <option value="1">Facials</option>
                      <option value="2">Make Up</option>
                      <option value="3">Threading</option>
                      <option value="4">Hair</option>
                      <option value="5">Spa</option>
                      <option value="6">Waxing</option>
                      <option value="7">Bridal Services</option>
                    </select>
                      </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Service Price</label>
                    <input id="price" name="price" type="Number" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                       <div class="form-group">
                      <input id="img" name="img" type="file" style="display:none;" />
                  <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD SERVICE IMAGE" onclick="document.getElementById('img').click();"/>
                      </div>
          
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  <!-- ------------------------------------------------------------------------- -->

<!-- -----------------Model for Appointments------------------ -->
<div class="modal fade" id="appointments" tabindex="-1" role="dialog" aria-labelledby="appointModalLabel" aria-hidden="true">
<form>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointModalLabel">Appointments</h5>
      </div>
      <div class="modal-body">
       <center>
       	<button type="submit" formaction="OwnerPAppointments/{{$info['Salon_name']}}" class="btn btn-dark" >Pending Appointments</button>
       	<button type="submit" formaction="OwnerAAppointments/{{$info['Salon_name']}}" class="btn btn-dark">Accepted Appoitments</button>
       </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</form>
</div>
  <!-- ------------------------------------------------------------------------- -->


<!-- -----------------Model for Promotions------------------ -->

<div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="appointModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointModalLabel">Promotions</h5>
      </div>
      <div class="modal-body">
       <center>
        <form>
       	<button class="btn btn-dark" formaction="/viewPromotion/{{$info['id']}}">Manage Promotions</button>
        </form>
       	<button class="btn btn-dark" data-toggle="modal" data-target="#addpromotion">Add Promotion</button>
       </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- ------------------------------------------------------------------------- -->

                  <!-- model for add promotion -->
 <form action="/addpromotion/{{$info['id']}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
  {{ csrf_field() }}
        <div class="modal fade" id="addpromotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Promotion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="title">Title </label>
                    <input id="title" name="title" type="text" placeholder="Enter The Title" class="form-control validate" required/>
                        </div>
                  <div class="form-group">
                   <label style="color: black;" for="description">Description </label>
                    <input id="description" name="description" type="text" placeholder="Enter The Description" class="form-control validate" required/>
                      </div>  
                      <div class="form-group">
                   <label style="color: black;" for="name">Real Price</label>
                    <input id="rprice" name="rprice" type="text" placeholder="Enter The Real Price" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="name">Discount Price</label>
                    <input id="dprice" name="dprice" type="text" placeholder="Enter The Discount Price" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                      <input id="file" name="file" type="file"  />
                 
                        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
        <!-- ------------------------------------------------------------------------- -->

@endsection