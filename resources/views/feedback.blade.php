
@extends('layouts.layout')
@section('content')

@foreach($data as $row)
<form action="/Feedback_save/{{$row->prodId}}" method="POST" enctype="multipart/form-data" >
        {{ csrf_field() }}
        
        
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FeedBack Details </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label style="color: black;" for="name">Name </label>
                    <input id="name" name="name" type="text"  class="form-control validate" value="{{Session::get('name')}}" required/>
                  </div>
                  <div class="form-group">
                    <label style="color: black;" for="name">FeedBack </label>
                    <input id="FB" name="FB" type="text"  class="form-control validate" placeholder="Write your feedback" required/>
                  </div>
                  <div class="form-group">
                    <input id="pro_pic" name="pro_pic" type="file" style="display:none;" />
                    <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('pro_pic').click();"/>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Processed</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
     
      </form>
@endforeach
@endsection
