@extends('admin.layout.adminheader')

@section('content')

@if(session()->has('message'))
    <div class="col-12 col-sm-12 alert alert-success">
        {{ session()->get('message') }}
        
    </div>

@endif

@foreach ($data as $product)

@if($product['Delivery_status']=="Pending")
<div class="col-12 col-sm-4 myCard singleBookingCard singleBookingCardPen">



<h2 class="my-card-heading">{{$product['Delivery_status']}}</h2>    

<div class="b-desc">
    <h5>Details</h5>
    <p>  <b>User:</b>{{$product['name']}}</p>
    <p><b>Phone:</b> {{$product['phone_no']}}</p>
    <p><b>Email:</b> {{$product['email']}}</p>
    <p><b>address:</b> {{$product['address']}}</p>
    <p><b>Time & Date:</b>{{ $product['created_at']}}</p>
    <p><b>amount:</b> {{$product['amount']}}</p>
    <p><b>Payment:</b> Done</p>
</div>
    @if($product['Delivery_status']=="Pending")
    <a href="{{ route('acceptOrder', ['id' => $product->id]) }}"><button href="" class="my-dbcard-btn ButtonAccept">Arrived</button></a>
    
    @endif              
</div>
@endif
@endforeach

@endsection

