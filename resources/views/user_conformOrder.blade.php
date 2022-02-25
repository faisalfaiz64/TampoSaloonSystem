@extends('layouts.layout')
@section('content')



@if(session()->has('message'))
    <div class="col-12 col-sm-12 alert alert-success">
        {{ session()->get('message') }}
        
    </div>

@endif


<hr>
<center><h3><b>My Orders</b></h3></center>
<hr>
<div class="container">
    <div class="row">
    
 <table class="table">
            <thead style="background: #292b2c;">
              <tr>
                <th>#</th>
                
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Email:</th>
                <th>Amount:</th>
                <th>Delivery Status:</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mpost as $product)
                {{ csrf_field() }}
              <tr>
                <th><b>{{$product->id}}</b></th>
               
                <th>{{$product->name}}</th>
                <th>{{$product->phone_no}}</th>
                <th>{{$product->address}}</th>
                <th> {{$product->email}}</th>
                <th>{{$product->amount}}</th>
                 <th>
                    @if($product->Delivery_status=="Arrived")
                   <b style="color: green; ">{{$product->Delivery_status}}</b> @endif 
                   @if($product->Delivery_status=="Pending")
                    <b style="color: red; ">{{$product->Delivery_status}}</b>
                   @endif
               </th> 
                <th>
                @if($product->Delivery_status=="Arrived")
                  @if($product->feedback == 1)
                      <h1>Feedback Submitted</h1>
                  @else
                <form>
                <button class="btn btn-dark" type="submit" formaction="/Feedback/{{$product->prodId}}">FeedBack</button>
                </form>
                @endif
                @endif
                </th>
              </tr>
              @endforeach
            </tbody>
 </table>

  </div>
</div>

@endsection

