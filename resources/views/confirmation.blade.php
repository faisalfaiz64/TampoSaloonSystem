@extends('layouts.layout')

@section('content')




<div class="container">
	<hr>
	<center><h5 style="background-color: orange; padding: 10px;">Order Confirmation</h5></center>
	<hr>
	<div class="row mainconfimr">
		
		<div class="col-sm-7 order-confirm">
			<!-- <h5 style=" padding: 10px; background-color: #fafafa;">Package Confirmation</h5> -->
		
			<h6>Your Cart Items</h6>
			<div>
				<!-- <div class="row">
			
				<div class="pr-confirm">
					
					<span><i class="fa fa-check-circle" aria-hidden="true"></i>
					<strong>Rs.320</strong></span> 
					<p><strong>Home Delivery</strong></p>
					<p>Est. Arrival: 30 Nov-06 Nov</p>
				</div>
				</div> -->
				<hr>
				<!-- ------------pRODUCT inFO-------------- -->
				@foreach($AllItems as $data)
				@foreach ($data as $product)
				<div class="row alldescpr">
				
					<div class="col-sm-2">
						<img style="height: 100px; width: 100px;" src="\images\products\{{$product['img']}}" alt="img">
					</div>
               		<div class="col-sm-10 pr-desc">	
               			<a style="color: black;" href="#">{{$product['name']}}</a>
               			<p style="color: #4A4E5A; overflow: hidden;"> {{$product['description']}}</p>
               			<p style="color:#575757; overflow: hidden; padding: 0px;" class=" "> <strong>Rs.{{$product['price']}}</strong></p>
               		</div>     	
               	 	
				</div>

					<?php $a=0; ?>
					<p hidden>{{$extra['msg']+=$product['price']}}</p>
					<?php $a++; ?>
					
				@endforeach
				@endforeach
				<hr>
		</div>
		</div>
		<!-- ------------RIGHTSIDE INFO ETC-------------- -->
		<div class="col-sm-5 billingdet">
			<form>
				<center><button type="submit" formaction="/paymentpro" style="width: 100%;" class="btn btn-info">Procceed To Payment</button></center>
				<h5 >Shipping & Billing</h5>
				<p><i class="fa fa-map-marker billicons" aria-hidden="true"></i>&nbsp; <a href="" style="color: #575757;">{{$mpost['name']}}</a> </p>
				<div class="billhome">
					<p><span>Home</span> {{$mpost['address']}}</p>
				</div>
				<div>
					<p><i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Bill to the same address<a href="" style="float: right;">Edit</a></p>
					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;{{$mpost['phone_no']}}<a href="" style="float: right;">Edit</a></p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$mpost['email']}}<a href="" style="float: right;">Edit</a></p>

				</div>
				<hr>
				<h5 style="padding: 0px;">Order Summary</h5><hr>
				<p>Subtotal(1 item)<span style="float: right;">Rs.{{$extra['msg']}}</span></p>
			 	<p>Shipping Fee<span style="float: right;">Rs.199</span></p>
			 	<hr>
			 	<p hidden>{{$extra['msg']+=199}}</p>
			 	<p>Total Amount<span style="float: right;">Rs.{{$extra['msg']}}</span></p> 
			 	<hr>
			 	<center><button type="submit" formaction="/paymentpro" style="width: 100%;" class="btn btn-info">Procceed To Payment</button></center>
			</form>
		</div>
	</div>
	
</div>
<br><br><br><br>





@endsection