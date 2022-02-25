@extends('admin.layout.adminheader')

@section('content')

     <!-- <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div> -->
      <!-- <div class="content">
       
        </div> -->
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


<div class="adminheaddash" data-color="red">
  <hr>
  <h1>ADMIN DASHBOARD</h1>
  <hr>
</div>

<br>
<div class="container">
  <div class="row">
    
     <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <div class="dash-img"><img src="/dash/630 - Edit.png"></div>
          <div class="dash-tit"><p>Add and manage all products</p></div>
          <div class="dash-desc"><a href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#products">Manage Products</a></div>
        </div>
        
      </div>
    </div>

<!-- model for add services -->
           <div class="modal fade" id="products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-top: 50px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="body_1">
                  <center>
                  
                    <form>
                      <button type="button" class="btn btn-secondary" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#addnewproduct">Add Products</button>
                      <button type="submit" class="btn btn-secondary" formaction="/viewproduct">View Products</button>
                    </form>
                
                </center>
                </div>
        <form>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>



<!-- Modal for add product -->
<form action="/productsave" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                    {{ csrf_field() }}
  <div class="modal fade" id="addnewproduct" tabindex="-1" role="dialog" aria-labelledby="test" aria-hidden="true">
 
    <div class="container tm-mt-big tm-mb-big" style="background-color: none;">
      <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
             <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                  
                  <div class="form-group mb-4">
                    <label for="name"> Product Name </label>
                    <input id="name" name="name" type="text" class="form-control validate" required/>
                  </div>
                  <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control validate" rows="3" required></textarea>
                  </div>
                  <div class="form-group mb-4">
                    <label for="description">Price</label>
                    <textarea id="price" name="price" class="form-control validate" rows="3" required></textarea>
                  </div>
                  <div class="form-group mb-4"><label for="category">Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="category">
                      <option selected>Select category</option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="expire_date">Expire Date</label>
                          <input id="expire_date" name="expire_date" type="text" class="form-control validate" data-large-mode="true"/>
                      </div>
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="stock">Units In Stock</label>
                          <input id="stock" name="stock" type="text" class="form-control validate" required/>
                      </div>
                  </div>    
              </div>
                <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-12">
                  <div class="tm-product-img-dummy mx-auto">
                    <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                  </div>
                  <div class="custom-file mt-3 mb-3">
                     <input id="pro_pic" name="pro_pic" type="file" style="display:none;" />
                     <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('pro_pic').click();"/>
                  </div>
                </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</form>
                            <!-- end add product model -->




     <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <div class="dash-img"><img src="/dash/611 - Orders.png"></div>
          <div class="dash-tit"><p>Manage orders of the system</p></div>
          <div class="dash-desc"><a href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#manageorders">Manage Orders</a></div>
        </div>
      
      </div>
    </div>
     <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <div class="dash-img"><img src="/dash/636 - Checklist.png"></div>
          <div class="dash-tit"><p>Add and manage owners</p></div>
          <div class="dash-desc"><a href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#manageowners">Manage Owners</a></div>
        </div>
      
      </div>
    </div>
 

<!-- model for add services -->
           <div class="modal fade" id="manageorders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-top: 50px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Appointments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="body_1">
                  <center>
                  
                    <form>
                      <button type="submit" class="btn btn-secondary" formaction="/order_admin_pending">Pending Orders</button>
                      <button type="submit" class="btn btn-secondary" formaction="/order_admin_arrived">Accepted Accepted</button>
                    </form>
                
                </center>
                </div>
        <form>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>




  </div>
  <br>
   <div class="row">
    
    <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <div class="dash-img"><img src="/dash/638 - Calendar.png"></div>
          <div class="dash-tit"><p>Manage Appointments</p></div>
          <div class="dash-desc"><a href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#manageappointment">View Appointments</a></div>
        </div>
         </div>
    </div>

<!-- model for add services -->
           <div class="modal fade" id="manageappointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-top: 50px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Appointments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="body_1">
                  <center>
                  
                    <form>
                      <button type="submit" class="btn btn-secondary" formaction="/appointment_admin_pending">Pending Appointment</button>
                      <button type="submit" class="btn btn-secondary" formaction="/appointment_admin_accepted">Accepted Appointment</button>
                    </form>
                
                </center>
                </div>
        <form>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>



















     
     <div class="col-sm-4">
      
      <div class="dashb">
        <div class="dashh-pack">
          <div class="dash-img"><img src="/dash/593 - Users.png"></div>
          <div class="dash-tit"><p>Manage all Users</p></div>
          <div class="dash-desc"><a href="/userpage" >View Users</a></div>
        </div>
        
      </div>
    </div>
    
  </div>



<!-- model for add services -->
           <div class="modal fade" id="manageowners" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="margin-top: 50px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Owners</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="body_1">
                  <center>
                  
                    <form>
                      <button type="button" class="btn btn-secondary" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#addonwer">Add New Owner</button>
                      <button type="submit" class="btn btn-secondary" formaction="/all_owner">View All Owners</button>
                    </form>
                
                </center>
                </div>
        <form>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>


    <br><br>

    <div class="row">

      <div class="dash-icons-button">
        <ul>
          <li><a href="/dashboard"><img src="/dash/607 - Refresh Page.png"> REGRESH</a></li>
          <li><a href="order_admin"><img src="/dash/605 - Sales.png">ORDERS</a></li>
          <li><a class="dropdown-item" href=""data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#adduser"><img src="/dash/633 - Create User.png">NEW USERS</a></li>
           <li><a href="/logout"><img src="/dash/619 - Logout.png">LOGOUT</a></li>
        </ul>
      </div>
      
    </div>



</div>
<br><br>




<br><br><br><br>


<!-- model for new Owner -->
 <form action="/addOwner" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
  {{ csrf_field() }}
        <div class="modal fade" id="addonwer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Owner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="name">Saloon Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Saloon Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="Email">Email </label>
                    <input id="email" name="email" type="text" placeholder="Enter The Email" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="Password">Password </label>
                    <input id="password" name="password" type="password" placeholder="Enter The Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="area">Select Branch</label>
                      <select id="area" name="area" class="form-control" style="height: 50px;">
                        <option selected disabled>Choose...</option>
                        <option value="Sadar">Sadar, Rawalpindi</option>
                        <option value="CM">Commercial Market, Rawalpindi</option>
                        <option value="DHA">DHA, Rawalpindi</option>
                        <option value="E11">Sector E11, Islamabad</option>
                        <option value="F8">Sector F8, Islamabad</option>
                        <option value="F9">Sector F9, Islamabad</option>
                        <option value="F11">Sector F11, Islamabad</option>
                        <option value="G10">Sector G10, Islamabad</option>
                        <option value="H8">Sector H8, Islamabad</option>
                        <option value="H11">Sector H11, Islamabad</option>
                      </select>
                      </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Address</label>
                    <input id="address" name="address" type="text" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                         <div class="form-group">
                   <label style="color: black;" for="name">Contact Number</label>
                    <input id="phone" name="phone" type="Number" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                          <label style="color: black;" for="img">Profile Picture </label>
                      <input type="file" name="img" id="img"  class="form-control" aria-describedby="emailHelp" placeholder="Chose Your Image">
                        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
        <!-- ------------------------------------------------------------------------- -->









  @endsection