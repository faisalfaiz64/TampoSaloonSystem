@extends('layouts.layout')

@section('content')

<form>
	
		<div class="page-center">
	<hr>
	<h1>  Products </h1>
	<hr>


	<div class="row box">
	
		@foreach($mpost as $row)
		<div class="col-sm-3"> 
			<div class="desc-blocks">
				<img src="/images/products/{{$row->img}}">
				<div class="desc-box">
					<div>
						<h5 class="desc-head">{{$row->name}}</h5>
						<div class="desc">
							<div class="desc-text">
								<p>Rs: {{$row->price}}</p>
							</div>

							<div class="descb"> 
								<button type="submit" formaction="/moreinfo/{{$row->id}}" class="btn btn-info"> More Info </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	
	</div>
</div>
</form>



<br><br><br><br>
@endsection