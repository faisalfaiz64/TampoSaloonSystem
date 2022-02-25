@extends('admin.layout.adminheader')

@section('content')

<div class="row box" style="margin: 15px;">
   
      @foreach($mpost as $row)
      <div class="col-sm-3"> 
         <div class="desc-blocks">
            <img src="/images/products/{{$row->img}}">
            <div class="desc-box">
               <div>
                  <h3 class="desc-head">{{$row->name}}</h3>
                  <h3 class="desc-head">Rs:{{$row->price}}</h3>
                  <form> 
                  <button type="submit" formaction="/rmvProduct/{{$row->id}}" class="btn btn-danger"> Remove </button>
                  <button type="button" class="btn btn-info"> Edit </button>
                  </form> 
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
 @endsection