@extends('admin.layout.adminheader')

@section('content')

@if(session()->has('message'))
    <div class="col-12 col-sm-12 alert alert-success">
        {{ session()->get('message') }}
        
    </div>

@endif



<center>
   <h5><b style="text-transform: uppercase; font-weight: bold; color:#292b2c;">Appointments</b></h5> 
</center>

<table class="table table-borderless">
    <thead style="background: #292b2c;">
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Shedule</th>
            <th>Service</th>
            <th>Payment</th>
           
        </tr>
    </thead>
    <tbody style="color: #333;">
        @foreach ($data as $product)

@if($product['status']=="Accepted")
        <tr>
            <td>{{$product['name']}}</td>
            @if($product['status']=="Accepted")
            <td>{{$product['status']}}</td>
            @endif
            <td>{{$product['gender']}}</td>
            <td>{{$product['address']}}</td>
            <td>{{$product['date_time']}}</td>
            <td>{{$product['service']}}</td>
            <td>None</td>
            
        </tr>
       @endif
       @endforeach
    </tbody>
</table>

 @endsection