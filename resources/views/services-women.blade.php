@extends('layouts.layout')

@section('content')


<div class="container womenservicespage">
	<div class="row services-prices">
		<div class="col-sm-6">
			<div class="service-box-left">
				<div class="service-box">
					<h1>THREADING</h1>
					<hr>
					@foreach($mpost as $row)
					@if($row->category == '3')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>FACIALS</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '1')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>WAXING</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '6')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>SPA</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '5')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
			</div>
		</div>



		<div class="col-sm-6">
			<div class="service-box-left">
				<div class="service-box">
					<h1>MAKEUP</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '2')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>Hair</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '4')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>BRIDAL SERVICES</h1>
					<hr>
						@foreach($mpost as $row)
					@if($row->category == '7')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
			</div>
		</div>
	</div>

<hr>
	<div class="row">
		<center>
		<div class="servicesapp">
			
			<div class="col-sm-8">
				<div class="ap-des-ser"></div>
				<span>Our professional hair team will carry out in-depth consultations free of charge to assess your hair and any style changes before your appointment.</span> 
			</div>
			<div class="col-sm-4">
				<form><button type="submit" formaction="/appointments/{{$salonId}}" class="btn btn-secondary">BOOK AN APPOINTMENT</button></form>
			</div>
			
		</div>
		</center>
	</div>
</div>

<br><br><br><br>
@endsection