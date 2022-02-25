@extends('layouts.layout')
@section('content')



@if(session()->has('message'))
    <div class="col-sm-12 alert alert-success">
        {{ session()->get('message') }}
        
    </div>

@endif
<hr>
<center>
   <h5><b style="text-transform: uppercase; font-weight: bold; color:#292b2c;">All Appointments</b></h5> 
</center>

<hr>
<div class="container">
    <div class="row">
        
  
 

        <table class="table">
           
            <thead style="background: #292b2c;">

              <tr>
                <th colspan="1">#</th>
                <th colspan="2">Name</th>
                <th colspan="1">gender:</th>
                 <th colspan="1">Time & Date:</th>
                 <th colspan="1">service:</th>
                 <th colspan="1">Payment:</th>
                 <th colspan="1">Status:</th>
                

              </tr>
            </thead>
            
            <tbody>
             
              <tr>
                @foreach ($appointments as $product)
                {{ csrf_field() }}
                <th colspan="1">{{$product->a_id}}</th>
                <th colspan="2" style="text-transform: capitalize;">{{$product->name}}</th>
                <th colspan="1" style="text-transform: capitalize;">{{$product->gender}}</th>
                <th colspan="1">{{$product->date_time}}</th>
                 <th colspan="1">{{$product->service}}</th>
                  <th colspan="1">{{$product->payment}}</th>
                  <th colspan="1">
                    @if($product->status == "Accepted")
                    <b style="color: green;"> {{$product->status}}</b>
                    @endif
                    @if($product->status == "Rejected")
                    <b style="color: red;"> {{$product->status}}</b>
                    @endif
                </th>
              </tr>
              @endforeach
            </tbody>
          </table>
         

  </div>
</div>

   



@endsection












