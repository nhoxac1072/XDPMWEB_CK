<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{{'frontend2/fonts/icomoon/style.css'}}}">

    <link rel="stylesheet" href="{{{'frontend2/css/owl.carousel.min.css'}}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{{'frontend2/css/bootstrap.min.css'}}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{{'frontend2/css/style.css'}}}">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{{'frontend2/images/bg_2.jpg'}}}');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h6 style="color:red; text-align:center">
              {{Session::get('mes')}}
              <?php Session::forget('mes') ?>
              </h6>
           
            </div>


<form action="{{URL::to('/userlogin')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control">

              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-info">
              <a href="{{URL::to('/registerpage')}}" class="btn btn-block btn-success"
              style="color:white; text-decoration: none;">
                          Register</a>
              <a href="{{URL::to('/login/facebook')}}" class="btn btn-block btn-primary" 
              style="color:white; text-decoration: none;">
                        Login with Facebook</a>
              <a href="{{URL::to('/login/google')}}" class="btn btn-danger btn-block" 
              style="color:white; text-decoration: none;">
                          Login with Google</a>
            </form>

</div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{{'frontend2/js/jquery-3.3.1.min.js'}}}"></script>
    <script src="{{{'frontend2/js/popper.min.js'}}}"></script>
    <script src="{{{'frontend2/js/bootstrap.min.js'}}}"></script>
    <script src="{{{'frontend2/js/main.js'}}}"></script>
  </body>
</html>