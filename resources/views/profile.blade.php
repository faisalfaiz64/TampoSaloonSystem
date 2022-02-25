@extends('layouts.layout')
@section('content')



    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        @if(session()->has('message'))
        <div class="alert alert-success">
      {{ session()->get('message') }}
           
        </div>

    @endif
        

<section class="owner-banner" style="width: 100%;">
    <div class="container">
       <div class="position-center">
          <div class="owner-title">
            <a href="changeProfilePic"><img src="images/users/{{$info->img}}" class="img-circle mnfPic" alt="Not Found"></a>
          <p><b style="font-size: 40px; text-transform: capitalize;" >{{$info['name']}} @if($user = Session::get('user')) @endif</b></p>
          
        </div>
       </div>
     </div>
</section>



    <div class="col-sm-4">
        <center>
          <h4><b>Profile Info.</b></h4>
          <table class="table table-borderless">
            <thead style="background: #292b2c;">
              <tr>
                <th>Name:</th>
                <th style="text-transform: capitalize;">{{$info['name']}} @if($user = Session::get('user')) @endif</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <th>Email:</th>
                <th>{{$info['email']}}</th>
              </tr>
              <tr>
                <th>Contact:</th>
                <th>{{$info['phone_no']}}</th>
              </tr>
              <tr>
                <th>Lives in:</th>
                <th>Islamabad, Pakistan</th>
              </tr>
            </tbody>
          </table>
        </center>



         
             

                                    <!-- MODAL FOR EDIT PROFILE -->
            <form action="/editprofile/{{session::get('id')}}" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
        {{ csrf_field() }}
        <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black; text-transform: capitalize;" for="name">Name </label>
                    <input id="name" name="name" type="text"  class="form-control validate" value="{{Session::get('name')}}" required/>
                        </div>
                       <div class="form-group">
                   <label style="color: black;" for="name">Address </label>
                    <input id="address" name="address" type="text"  class="form-control validate" value="Islamabad,Pakistan" required/>
                        </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Email </label>
                    <input id="email" name="email" type="text"  class="form-control validate" value="{{Session::get('email')}}" required/>
                        </div>
                         <div class="form-group">
                   <label style="color: black;" for="name">Phone Number </label>
                    <input id="phone_no" name="phone_no" type="text"  class="form-control validate" placeholder="Enter Your Number" required/>
                        </div>
                        <div class="form-group">
                      <input id="file" name="pic" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-info btn-block mx-auto"
                    value="Insert Image"
                    onclick="document.getElementById('file').click();"
                  />
                        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>

     



    </div>
    <div class="col-sm-8">
      
          @if ($user = Session::get('user'))
             
               @if($user=='customer')
                <div class="mn" role="group" aria-label="Basic example">
                  <form>
                   <center>
                <button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#editprofile">Edit Profile</button>
               
                
                
               <button type="submit" formaction="/user_appointment"  class="btn outline-dark btn-lg btn-block" style="margin-top: 20px;" >Appointment</button>
               <button type="submit" formaction="/user_conformOrder"  class="btn outline-dark btn-lg btn-block"  >Order Confirmation</button>
               <button type="submit" formaction="/cart"  class="btn btn-outline-dark btn-rounded waves-effect"  >Go to cart</button>
               </center>
             </form>
               @endif
           @endif 
            </div>
        
      </div>
        </div>
        
    </div>

    <script src="js/addproduct_jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/addproduct_bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
      


@endsection