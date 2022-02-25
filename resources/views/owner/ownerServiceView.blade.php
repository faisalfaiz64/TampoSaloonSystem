@extends('layouts.layout')

@section('content')

<!-- -------------------------------------Men Services-------------------------------------------  -->
<div class="container menservicespage">
	{{ csrf_field() }}
	<h3 >Men Services</h3>
	<div class="row services-prices">

		
		 
		<div class="col-sm-6">
			
			<div class="service-box-left">
				<div class="service-box">
					<h1>FACIALS</h1>
					<hr>
					@foreach($menServices as $row)
					@if($row->category == '1')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span>
									<a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>THREADING</h1>
					<hr>
					@foreach($menServices as $row)
					@if($row->category == '3')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>BEARD</h1>
					<hr>
					@foreach($menServices as $row)
					@if($row->category == '5')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
					@foreach($menServices as $row)
					@if($row->category == '2')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
					@foreach($menServices as $row)
					@if($row->category == '4')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
								</li>
								</div>	
							</ul>
						</div>
						@endif
						@endforeach
				</div>
				<div class="service-box">
					<h1>MASSAGE</h1>
					<hr>
					@foreach($menServices as $row)
					@if($row->category == '6')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/men_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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

</div>

<br><br><br><br>
<!-- -------------------------------------Women Services-------------------------------------------  -->

<div class="container womenservicespage">
	<h3>Women Services</h3>
	<div class="row services-prices">

		<div class="col-sm-6">
			<div class="service-box-left">
				<div class="service-box">
					<h1>THREADING</h1>
					<hr>
					@foreach($womenServices as $row)
					@if($row->category == '3')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '1')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '6')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '5')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '2')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '4')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
						@foreach($womenServices as $row)
					@if($row->category == '7')
						<div class="serviceprice-box">
							<ul>
								<div class="service-list-price">
								<li>
									<span class="womenservices-element-images"><img src="/images/women_services/{{$row->img}}"></span><span class="elementor-price-list-title">{{$row->name}}</span><span class="elementor-price-list-price">Rs {{$row->price}}</span><a data-toggle="modal" data-target="#editUser/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="/delete_user/{{$row->id}}"><i class="fas fa-trash" style="color: red;"></i><a/>
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
</div>

<br><br><br><br>
@endsection