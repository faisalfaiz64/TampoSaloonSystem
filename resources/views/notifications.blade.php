@extends('layouts.layout')

@section('content')





<hr>
<center>
	<h4>All Notifications</h4>
</center>

<hr>

<section>
	<div class="container">
		<div class="row">
			<table class="table table-borderless">
				@foreach($notfData as $data)
				<tr>
					<td>{{$data->msg}}</td>
					<td>
						<a href="deleteNotf/{{$data->id}}"><i class="fas fa-trash"></i></a>
						<a href="#">view</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>





@endsection