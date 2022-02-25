@extends('layouts.layout')
@section('content')

    @if (count($errors) > 0)

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>


@endif
@if(session()->has('message'))

@if(session()->get('message')=='404')
    <div class="alert alert-danger">
        Incorrect Email or Password
        </a>
    </div>
@else
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </a>
    </div>
@endif
@endif
@if($data->isEmpty())
   <h3>There Is Promotion of YOur Salon</h3>
@else
<div class="content">
	<div class="table-users">
		{{ csrf_field() }}
  	 <div class="header">All Active Promotion</div>
   
   <table class="table">
      <tr>
      	 <th>#</th>
         <th>Picture</th>
         <th>Title</th>
         <th>Description</th>
         <th>Real Price</th>
         <th>Discount Price</th>
         <th>Percentage</th>
         <th >Created At</th>
         <th>Action</th>
      </tr>
@foreach($data as $row)
      <tr>
      	 <td>{{$row->id}}</td>
         <td><img class="img-fluid" src="/images/promotion/{{$row->pic}}" alt="" style="height: 50px;" ></td>
         <td>{{$row->title}}</td>
         <td>{{$row->description}}</td>
         <td>{{$row->realPrice}}</td>
         <td>{{$row->discountPrice}}</td>
         <td>{{$row->discountPrice/$row->realPrice*100}}%</td>
         <td>{{$row->created_at}} </td>
         <td><a data-toggle="modal" data-target="#editPromotion/{{$row->id}}" style="cursor: pointer;"><i class="fas fa-edit" ></i></a> &nbsp;&nbsp;<a href="delete/{{$row->id}}"><i class="fa fa-trash"></i><a/> </td>
      </tr>
       <!-- model for edit User -->
             <form action="/editPromotion/{{$row->id}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="editPromotion/{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Promotion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="name">Title </label>
                    <input id="title" name="title" type="text"  class="form-control validate" value="{{$row->title}}" required/>
                        </div>
                       <div class="form-group">
                   <label style="color: black;" for="namdescritione">Description </label>
                    <input id="description" name="description" type="text"  class="form-control validate" value="{{$row->description}}" required/>
                        </div>
                      <div class="form-group">
                   <label style="color: black;" for="rprice">Real Price </label>
                    <input id="rprice" name="rprice" type="text"  class="form-control validate" value="{{$row->realPrice}}" required/>
                        </div>
                         <div class="form-group">
                   <label style="color: black;" for="dprice">Discount Price </label>
                    <input id="dprice" name="dprice" type="text"  class="form-control validate" value="{{$row->discountPrice}}" required/>
                        </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
<!-- ------------------------------------------------------------------ -->
     @endforeach
   </table>
</div>

</div>
@endif
 @endsection