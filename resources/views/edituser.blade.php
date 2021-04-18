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
    <div class="bg order-1 order-md-2" style="background-image: url('{{{'frontend2/images/bg_4.jpg'}}}');"></div>
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
            
<form action="{{URL::to('/edituser')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                <label style="color:black" for="email">{{$user->email}}</label>
                <input type="email" name="email" readonly class="form-control">
              </div>
              <div class="form-group first">
                <label style="color:black" for="password">Password: {{$user->password}}</label>
                <input type="password" name="password" required class="form-control">
              </div>
              <div class="form-group first">
                <label style="color:black" for="name">Name: {{$user->name}}</label>
                <input type="text" name="name" required class="form-control">
              </div>
              <div class="form-group first">
                <select class="form-control" name="gt">
                            <option value="Nam" @if ($user->gt == "Nam") {{ 'selected' }} @endif> Nam</option> 
                            <option value="Nữ" @if ($user->gt == "Nữ") {{ 'selected' }} @endif> Nữ</option>  
                            <option value="UK" @if ($user->gt == "UK") {{ 'selected' }} @endif> Không xác định</option>  
                </select>
              </div>
              <div class="form-group last mb-3">
                <label style="color:black" for="phone">Phone: {{$user->phone}}</label>
                <input type="text" name="phone" required class="form-control">
              </div>
              <input type="submit" value="Edit" class="btn btn-block btn-warning"
              style="color:black; text-decoration: none;">
              <br>
              <a href="{{URL::to('/')}}" class="btn btn-block btn-secondary"
              style="color:white; text-decoration: none;">
                          Come back home page</a>
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