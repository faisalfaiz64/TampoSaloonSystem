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
            <th>Action</th>
        </tr>
    </thead>
    <tbody style="color: #333;">
        @foreach ($data as $product)

@if($product['status']=="Pending")
        <tr>
            <td>{{$product['name']}}</td>
            @if($product['status']=="Pending")
            <td>{{$product['status']}}</td>
            @endif
            <td>{{$product['gender']}}</td>
            <td>{{$product['address']}}</td>
            <td>{{$product['date_time']}}</td>
            <td>{{$product['service']}}</td>
            <td>None</td>
            <td>
             @if($product['status']=="Pending")
                <a href="{{ route('acceptAppointment', ['id' => $product->a_id]) }}">
                    <button href="" class="btn btn-success">Accept</button>
                </a>
                <a href="{{ route('rejectAppointment', ['id' => $product->a_id]) }}">
                    <button href="" class="btn btn-danger">Reject</button>
                </a>
            @endif  
            </td> 
        </tr>
       @endif
       @endforeach
    </tbody>
</table>

 @endsection