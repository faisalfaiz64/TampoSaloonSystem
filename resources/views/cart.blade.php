

@extends('layouts.layout')

@section('content')
@if ($user = Session::get('user'))
<!-- section -->
<div class="section">

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			@if(session()->has('message'))
    		<div class="alert alert-success">
			{{ session()->get('message') }}
       		 
    		</div>

		@endif

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
            <hr>
						<h2 class="title" style="text-transform: capitalize; font-weight: bold;">cart Items</h2>
					</div>
					<hr>
				</div>

				
				<!-- section title -->


@foreach($AllItems as $data)
	@foreach ($data as $product)
   
               <div class="container">

               	<div class="row cart-co">

               		<div class="col-sm-2">
               			<img style="height: 100px; width: 100px; " class="cat-pimg" src="images/products/{{$product['img']}}" alt="">
               		</div>
               		<div class="col-sm-4">
               			<a style="color: black;" href="moreinfo/{{$product['id']}}">{{$product['name']}}</a>
               			<p style="color: #4A4E5A; overflow: hidden;"> {{$product['description']}}</p>
               			<p style="color:#F8694A; overflow: hidden; font-weight:bold;" class=" ">Rs.{{$product['price']}}</p>
               		</div>
               		<div class="col-sm-6">
               			<a href="{{ route('rmvFromCart', ['id' => $product->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="color: black;" ></i> </a>
               		</div>

               	</div>
               	<hr>
               </div>

				<p hidden>{{$extra['msg']+=$product['price']}}</p>
 

		

		</div>
			<div class="row" >
				<h3 style="color: red; font-size: 20px; font-weight: bold; text-transform: capitalize;" class="total">Total amount: Rs.{{$extra['msg']}}/-</h3>
			</div>
			<div class="procced-pay">
				<a> <button class="btn btn-default"  data-toggle="modal" data-target="#BuyNow" role='button' type="button">Procceed To Payment</button> <a>
			</div>
		</div>
		</div>
		        <!-- MODAL FOR Buy Now Option -->
         <form action="/confirmation/{{$product['id']}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="BuyNow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Further Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="name">Name </label>
                    <input id="name" name="name" type="text"  class="form-control validate" value="{{Session::get('name')}}" required/>
                        </div>
                       <div class="form-group">
                   <label style="color: black;" for="name">Address </label>
                    <input id="address" name="address" type="text"  class="form-control validate" value="Islamabad,Pakistan" required/>
                        </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Email </label>
                    <input id="email" name="email" type="text"  class="form-control validate" value="{{Session::get('email')}}" required/>
                        </div>
                         <div class="form-group">
                   <label style="color: black;" for="name">Phone Number </label>
                    <input id="phone_no" name="phone_no" type="text"  class="form-control validate" placeholder="Enter Your Number" required/>
                        </div>
                       
        <div class="modal-footer">
        		<button type="submit" class="btn btn-default">Processed</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
 @endforeach
@endforeach
		
@else
	
	<div class="alert">
		<script>
 		  alert('You Need to Login First');
	</script>
	</div>

@endif





</div>
</div>
</div>

<br><br><br><br><br><br>
@endsection

