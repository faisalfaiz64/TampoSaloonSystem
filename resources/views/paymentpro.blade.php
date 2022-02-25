@extends('layouts.layout')

@section('content')


<div class="container">
	
	<hr>
	<h5>Select Payment Method</h5>
	<hr>
	@foreach($AllItems as $data)
	@foreach ($data as $product)
		<?php $a=0; ?>
		<p hidden>{{$extra['msg']+=$product['price']}}</p>
		<?php $a++ ?>
	@endforeach
	@endforeach
	
	<div class="row btns-pay">
		<div class="col-sm-8">
		<button type="button" class="btn btn-info" onclick="Display1()">
			<center>
			<div class="payment-box">
				<img src="/pickup.png" style="height: 80px;">
				<h6>Cash on Delivery</h6>
			</div>
			</center>
		</button>
		<button type="button" class="btn btn-info" onclick="Display2()">
			<center>
			<div class="payment-box">
				<img src="/d.jpg" style="height: 80px;">
				<h6>Debit Card</h6>
			</div>
			</center>
		</button>
		</div>
		<div class="col-sm-4 ord-summary-pay">
			
				<center>
				<h5 style="padding: 0px; text-transform: uppercase;">Order Summary</h5>
				</center>
				<hr>
				<p>Subtotal(<?php echo $a; ?> item)<span style="float: right;">Rs.{{$extra['msg']}}</span></p>
			 	<p>Shipping Fee<span style="float: right;">Rs.199</span></p>
			 	<hr>
			 	<p hidden>{{$extra['msg']+=199}}</p>
			 	<p><strong style="color: red;">Total Amount</strong><span style="float: right; color: red;"><strong>Rs.{{$extra['msg']}}</strong></span></p> 
			 	<hr>
			 	<?php $amount = $extra['msg'] ?>
				
		</div>
	</div>
<form method="POST" action="/done_order/ <?php echo $amount; ?> " enctype="multipart/form-data" class="signup-form">
		{{ csrf_field() }}
		<div class="row detail-cod" id="showdiv1">

			<div class="col-sm-8">



				<hr>
				<br>
				<center>
			<p style="color: black;"> <strong>"You can pay in cash to our courier when you receive the goods at your doorstep."</strong></p>
			<br>
			<button type="submit" class="btn btn-warning">CONFIRM ORDER</button>
				</center>
				<hr>
			</div>
		</div>

</form>


		<div class="row detail-easypaisa" id="showdiv2">
			<div class="col-sm-8">

				<hr>
				<p style="color: black;">Your Debit Card</p>
			<br><br>
			<form>
			<button type="submit" class="btn btn-warning" formaction="/checkout/{{$extra['msg']}}">CONFIRM ORDER</button></form>

			<hr>


			</div>
			
		</div>

	</div>


<br><br><br>

<script>
function Display1() {
  var x = document.getElementById("showdiv1");
  var y = document.getElementById("showdiv2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.display = "none";
  }
}

function Display2() {
  var x = document.getElementById("showdiv2");
  var y = document.getElementById("showdiv1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
     y.style.display = "none";

  }
}





</script>













@endsection