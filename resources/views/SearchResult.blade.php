@extends('layouts.layout')
@section('content')
<section class="profile-ser">
        <div class="container">
        	@if(session()->has('message'))
    		<div class="alert alert-success">
			{{ session()->get('message') }}
       		 
    		</div>

		@endif

 <section class="srpage-banner">
    <div class="container">
       <div class="position-center">
          <div class="srpage-title">
        <b style="font-size: 40px;">Welcome to {{$extra['kw']}} Branch </b> 
        </div>
      </div>
    </div>
  </section>


          <h3 style="text-transform: none; font-weight: bold; text-align: center;">Search Results for "{{$extra['kw']}}"</h3>
          <hr style="width: 100%;">

          @if($data != "")
          @foreach($data as $row)
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                 <table class="table table-borderless">
            <thead style="background: #292b2c;">
              <tr>
                <th>Salon Branch:</th>
                <th>Tampo Salon, {{$extra['kw']}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Name:</th>
                <th>{{$row->Salon_name}}</th>
              </tr>
              <tr>
                <th>Email:</th>
                <th>{{$row->email}}</th>
              </tr>
              <tr>
                <th>Address:</th>
                <th>{{$row->address}}</th>
              </tr>
              <tr>
                <th>Contact:</th>
                <th>{{$row->phone_no}}</th>
              </tr>


              
              
            </tbody>
          </table>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="pro-img">
                  <h6><b>Owner</b></h6>
                 <img src="/images/owners/{{$row->img}}" alt="img" class="img-fluid" style="height: 50px;">
                </div>
                  </div>
                  <div class="col-sm-4">
                    Tampo Salon, {{$extra['kw']}} Branch
                  </div>
                  <div class="col-sm-6">
                    <form action="/ShowSalon/{{$row['id']}}">
                       <button type="submit" class="btn btn-dark pull-right no-margin-top">View Services</button>
                    </form>
                  </div>
                </div>
                
              </div>
          </div>
          </div>
          
         


                
            
            	
           
          

            <hr style="width: 100%;">
            @endforeach
            @endif
            <h3 class="mymsg">{{$extra['msg']}}</h3>
        </div>
      </section>





@endsection