
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TAMPO SALOON|ADMIN SIDE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../admin/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="../admin/css/userpage.css" rel="stylesheet" />


  <!-- CSS Just for demo purpose, don't include it in your project -->
 <!--  <link href="../admin/demo/demo.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="css/addProduct-style.css">
  <link rel="stylesheet" href="css/addproduct_fontawesome.min.css" />
  <link rel="stylesheet" href="css/addproduct_bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/dash-style.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div >
        <li class="logo" style="list-style: none; text-align: center;"><a href="/"><img src="/logo/logotext.png" class="white"></a></li>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons education_atom"></i>
              Users Management
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/userpage">User</a>
                  <a class="dropdown-item" href=""data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#adduser">Add New User</a>
            </div>
          </li>
         <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons education_atom"></i>
              Product
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/viewproduct">Product List</a>
                  <a class="dropdown-item" href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#addnewproduct">Add New Product</a>
            </div>
          </li>
         <!--  <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons education_atom"></i>
              Services
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Services List</a>
                  <a class="dropdown-item" href="#" >Edit Service</a>
                  <a class="dropdown-item" href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#addservices">Add New Service</a>
            </div>
          </li> -->
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons users_single-02"></i>
              Order
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/order_admin_pending">Pending Orders</a>
                  <a class="dropdown-item" href="/order_admin_arrived" >Accpeted Orders</a>
            </div>
          </li>
           <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons users_single-02"></i>
              Appointment
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/appointment_admin_pending">Pending Appointments</a>
                  <a class="dropdown-item" href="/appointment_admin_accepted" >Accpeted Appointments</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons users_single-02"></i>
              Saloon Owner
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#addonwer">Add New Owner</a>
                  <a class="dropdown-item" href="/all_owner" >All Owners</a>
            </div>
          </li>
          <li>
            <a href="/logout">
              <i class="now-ui-icons users_single-02"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
           <!--  </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div> -->
        </div>
      </nav>
      <!-- End Navbar -->

      @yield('content')


      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="/">
                  Tampo Salon
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="">Faisal</a> & <a href="">Hasham</a>  Coded by <a href="https://www.creative-tim.com" target="_blank">Tampo Salon</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
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


                            <!-- Model For Add new User -->

  <form action="/register" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
     {{ csrf_field() }}
        <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label style="color: black;" for="name"> Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Name" class="form-control validate" required/>
                </div>
                <div class="form-group">
                    <label style="color: black;" for="category" >Email</label>
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" class="form-control validate"/>
                </div>
                <div class="form-group">
                    <label style="color: black;" for="name">Phone No</label>
                    <input type="tel" pattern="[0-9]{11}" class="form-input" name="phone_no" id="phone_no" placeholder="Your Phone No" class="form-control validate"/>
                </div>
                <div class="form-group">
                    <label style="color: black;" for="name">password</label>
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password" class="form-control validate"/>
                </div>
                <div class="form-group">
                    <label style="color: black;" for="name">Re-password</label>
                    <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" class="form-control validate"/>
                </div>
                
                <div class="form-group">
                    <input id="img" name="img" type="file" style="display:none;" />
                    <input type="button" class="btn btn-secondary btn-block mx-auto" value="UPLOAD SERVICE IMAGE" onclick="document.getElementById('img').click();"/>
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

                        <!-- end add User model -->

            <!-- model for add services -->
           <div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="body_1">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#menservices" >Men Services</button>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#womenservices" >Women Services</button>
                </div>
        <form>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
        <!-- ------------------------------------------------------------------------- -->

        <!-- model for men services -->
 <form action="/M_S_add" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
  {{ csrf_field() }}
        <div class="modal fade" id="menservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Man Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                   <label style="color: black;" for="name">Service Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="category" >Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="category">
                      <option selected>Select category</option>
                      <option value="1">Facials</option>
                      <option value="2">Make Up</option>
                      <option value="3">Threading</option>
                      <option value="4">Hair</option>
                      <option value="5">Beard</option>
                      <option value="6">Massage</option>
                    </select>
                      </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Service Price</label>
                    <input id="price" name="price" type="Number" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                      <input id="file" name="pic" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD SERVICE IMAGE"
                    onclick="document.getElementById('file').click();"
                  />
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
        <!-- ------------------------------------------------------------------------- -->

        <!-- model for women services -->
    <form action="/W_S_add" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
          {{ csrf_field() }}
        <div class="modal fade" id="womenservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Women Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             
              <div class="modal-body">
                 <div class="form-group">
                   <label style="color: black;" for="name">Service Name </label>
                    <input id="name" name="name" type="text" placeholder="Enter The Name" class="form-control validate" required/>
                        </div>
                        <div class="form-group">
                   <label style="color: black;" for="category" >Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="category">
                      <option selected>Select category</option>
                      <option value="1">Facials</option>
                      <option value="2">Make Up</option>
                      <option value="3">Threading</option>
                      <option value="4">Hair</option>
                      <option value="5">Spa</option>
                      <option value="6">Waxing</option>
                      <option value="7">Bridal Services</option>
                    </select>
                      </div>
                      <div class="form-group">
                   <label style="color: black;" for="name">Service Price</label>
                    <input id="price" name="price" type="Number" placeholder="Enter The Price" class="form-control validate" required/>
                        </div>
                       <div class="form-group">
                      <input id="img" name="img" type="file" style="display:none;" />
                  <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD SERVICE IMAGE" onclick="document.getElementById('img').click();"/>
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
  <!-- ------------------------------------------------------------------------- -->

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

  <!--   Core JS Files   -->
  <script src="../admin/js/core/jquery.min.js"></script>
  <script src="../admin/js/core/popper.min.js"></script>
  <script src="../admin/js/core/bootstrap.min.js"></script>
  <script src="../admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../admin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../admin/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../admin/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>