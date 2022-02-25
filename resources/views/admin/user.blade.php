@extends('admin.layout.adminheader')

@section('content')

<div class="content">
	<div class="table-users">
		{{ csrf_field() }}
  	 <div class="header">All Active Users</div>
   
   <table class="table" style="color: #333;" cellspacing="0">
      <tr>
      	 <th>ID No</th>
         <th>Picture</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th >Created At</th>
         <th>Action</th>
      </tr>
@foreach($mpost as $row)
      <tr>
      	 <td>{{$row->id}}</td>
         <td><img src="/images/users/{{$row->img}}" alt="" class="img-fluid"></td>
         <td>{{$row->name}}</td>
         <td>{{$row->email}}</td>
         <td>{{$row->phone_no}}</td>
         <td>{{$row->created_at}} </td>
         <td><a href="delete/{{$row->id}}"><i class="fa fa-trash"></i><a/> </td>
      </tr>

     @endforeach
   </table>
</div>

</div>

 @endsection