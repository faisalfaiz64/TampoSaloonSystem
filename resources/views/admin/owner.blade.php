@extends('admin.layout.adminheader')

@section('content')

<div class="container">
	<div class="row">
		{{ csrf_field() }}
  	 <div class="header">All Active Saloon</div>
   
   <table class="table">
      <thead style="background: #292b2c;">
      <tr>
      	 <th>ID No</th>
         <th>Picture</th>
         <th>Salon Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Address</th>
         <th>Area</th>
         <th >Created At</th>
         <th>Action</th>
      </tr>
      </thead>
      <tbody style="color: #333;">
@foreach($mpost as $row)
      <tr>
      	 <td>{{$row->id}}</td>
         <td><img src="/images/owners/{{$row->img}}" alt="" /></td>
         <td>{{$row->Salon_name}}</td>
         <td>{{$row->email}}</td>
         <td>{{$row->phone_no}}</td>
         <td>{{$row->address}}</td>
         <td>{{$row->area}}</td>
         <td>{{$row->created_at}} </td>
         <td><a href="delete_salon/{{$row->id}}"><i class="fa fa-trash"></i><a/> </td>
      </tr>

     @endforeach
     </tbody>
   </table>
</div>

</div>

 @endsection