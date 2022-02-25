@extends('layouts.layout')

@section('content')


<div class="appointmentpage">
<center>
  <hr>
  <h1>Make an Appointment</h1>
  <hr>

    <div class="appform">
      <form method="POST" action="/storeappointment">
        {{ csrf_field() }}

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
        You Need To Login First!
        </a>
    </div>
@else
    <div class="alert alert-success">
        {{ session()->get('message') }}
        </a>
    </div>
@endif
@endif
	         <div class="form-group">
                <label for="inputname">Full Name</label>
                <input type="text" class="form-control" id="inputname" name="name" placeholder="Full Name">
          </div>

          <div class="form-group">
                <label for="inputemail">Email address</label>
                <input type="email" class="form-control" pattern=".+@gmail.com" minlength="3" maxLength="30" id="inputemail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
          <label for="inputState"><b>Select Branch</b></label>
          <select id="inputState" name="salon" class="form-control">
            <option selected disabled>Choose...</option>
            @foreach($data as $row)
              <option value="{{$row->Salon_name}}">{{$row->Salon_name}}, {{$row->area}} <input type="hidden" value="{{$row->id}}" name="ownerid"/></option>
            @endforeach
          </select>
        </div>

          <fieldset class="form-group">
              <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radios" id="optmale" value="male" >
                      <label class="form-check-label" for="gridRadios1">
                         Male
                      </label>
                  </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radios" id="optfemale" value="female">
                    <label class="form-check-label" for="gridRadios2">
                         Female
                    </label>
                </div>
        
                </div>
              </div>
          </fieldset>

          <div class="form-group">
              <label for="selectservice">Select Service</label>
              <small id="emailHelp" class="form-text text-muted">Press <b>CTRL</b> button + <b>Left Click</b> to select multiple services.</small>
                <select class="form-control abc" id="selectservice" name="selectservice[]" multiple="" >
                  <option selected disabled>Select Service</option>
                  <option value="FACIALS" id="FACIALS">FACIALS</option>
                  <option value="THREADING" id="THREADING">THREADING</option>
                  <option value="BEARD" id="BEARD">BEARD</option>
                  <option value="MASSAGE" id="MASSAGE">MASSAGE</option>
                  <option value="Hair" id="Hair">Hair</option>
                  <option value="MAKEUP" id="MAKEUP">MAKEUP</option>
                </select>
          </div>


          <div class="form-group row">
              <label for="example-datetime-local-input" class="col-2 col-form-label">Date</label>
              <div class="col-10">
                 <input class="form-control" type="date" min='1899-01-01T13:45:00' max='2000-13-13T13:45:00'  id="date_time" name="date_time">
              </div>
          </div>
          <div class="form-group row">
              <label for="example-datetime-local-input" class="col-2 col-form-label">Time</label>
              <div class="col-10">
                 <input class="form-control" type="time" min='10:00:00' max='20:00:00'  id="time" name="time">
              </div>
          </div>



          <div class="form-group">
                <label for="inputcomment">Additional Comment</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Addtitional comments(optional)">
          </div>

         
            <button type="submit" onclick="displayfun()" class="btn btn-outline-dark">Submit</button>
      </form>
    </div>

</center>
<hr>
</div>
<br>
<br>

<script type="text/javascript">
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date_time").setAttribute("min", today);
</script>

<script >
  $(document).ready(function() {
    $('.abc').select2();
});

      var mydata = document.getElementById('selectservice');
      var newexp = "";
      function displayfun()
      {
        var iname = document.getElementById('FACIALS').value;
        var position = document.getElementById('THREADING').value;
        var city = document.getElementById('BEARD').value;
        var select = document.getElementById('MASSAGE').value;
        var entertxt = document.getElementById('Hair').value;
        var enterbb = document.getElementById('MAKEUP').value;
        var allexp = iname+","+position+","+city+","+select+","+entertxt+","enterbb;
            document.getElementById('selectservice').value = allexp;
            newexp = allexp;
      }

</script>


@endsection