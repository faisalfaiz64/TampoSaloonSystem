@extends('layouts.layout')

@section('content')


<div class="container">
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
	<div class="row">
		<div class="col-sm-6">
			<div class="prodet-img">
				<img src="/images/products/{{$mpost->img}}">
			</div>
		</div>
		<div class="col-sm-6 product-details">
			<div class="prodet-title">
				<h3> {{$mpost->name}}</h3>
			</div>
			<div class="prodet-ratings">
				<h5>Rating</h5>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
			</div>
			<div class="prodet-price">
				<div class="realprice">
					<p>Rs. <span class="price-color">{{$mpost->price}}</span>
					 <!-- <span class="price-disc"> Rs.550</span> --></p>
				</div>
					<div class="py-pro" >
						<h5>Payment Methods</h5>
						<img src="/pickup.png">
						<img src="/d.jpg" style="height: 50px; margin-left: 20px;">
					</div>
				
			</div>
			<div class="prodet-quantity">
				<div class="qty">
					<span class="quanti">Quantity</span>
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus bg-dark">+</span>
                    </div>
			</div>
			<div class="prodet-buy">
				<a><button class="btn btn-primary"  data-toggle="modal" data-target="#BuyNow" role='button' type="button"> Buy Now </button> </a>
				<a class="btn btn-primary"  href='/addToCart/{{$mpost->id}}' type="button" role='button'> Add To Cart </a>
			</div>
		</div>
    <hr>
    <p style="color: black;"><b>Description</b></p>
    <p style="color: black;">{{$mpost->description}}</p>
	</div>
</div>
<hr>


	
	<div class="container">
		<h2><b>Product Reviews<b></h2>
		<hr>
    @foreach($Feedback as $row)
		<div class="row">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span> 
			
			<div class="rev-name">
				<h6 style="color: #a1a1a1;" >	&nbsp;By {{$row->name}} </h6>
			</div>
				<p  style="width: 100%; border: hidden; color: #a1a1a1;">{{$row->FB}}</p>
				<div class="proreview-images">
					<img src="/images/Feedback/{{$row->img}}" style="height: 100px; width: 100px; padding-left: 5px;">
				</div>
		</div>
    <hr>
    @endforeach
		<hr>

</div>
                         <!-- MODAL FOR Buy Now Option -->
         <form action="/confirmation/{{$mpost->id}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="BuyNow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        	@if(session()->has('user'))
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
        		<button type="submit" class="btn btn-primary">Processed</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        @else
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
           <form>
	            <div class="modal-body">
	                <h3>Need To Login First</h3>
	               <a href="/login" class="btn-success">LogIn </a>
	               <a href="/signup" class="btn-success"> Sign Up</a>
	        	</div>
		    </form> 
	        </div>
        </div>
        @endif
      </div>
        </form>





<script type="text/javascript">
		$(document).ready(function(){
		    $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
 		});
</script>
@endsection