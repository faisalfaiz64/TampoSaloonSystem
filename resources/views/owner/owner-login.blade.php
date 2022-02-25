<!DOCTYPE html>
<html>
<head>
  <title>Owner Login</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--  -------------------MDB CDN------------------ -->
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>
<body>

</body>
</html>


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


<section>
  <div class="container" style="width: 50%;">
    <form class="text-center p-5" action="OwnerValidateLogin">

    <p class="h4 mb-4">Owner Login</p>


    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">


    <input type="password" id="defaultLoginFormPassword" name="pass" class="form-control mb-4" placeholder="Password">


    <button class="btn btn-dark btn-block my-4" type="submit">Sign in</button>

 
    <p>Not an owner?
        <a href="/">Get Back</a>
    </p>



</form>
  </div>
</section>


