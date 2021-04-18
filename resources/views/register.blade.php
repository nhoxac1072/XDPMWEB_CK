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

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{{'frontend2/images/bg_3.jpg'}}}');"></div>
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


<form action="{{URL::to('/userregister')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                @if(session()->has('useremail'))
                <input type="email" name="email" readonly class="form-control" value="{{session('useremail')}}">
                @else
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control">
                @endif
              </div>
              <div class="form-group next">
                <label for="password">Password</label>
                <input type="password" name="password" required class="form-control">
              </div>
              <div class="form-group next">
                <label for="name">Name</label>
                <input type="text" name="name" required class="form-control">
              </div>
              <div class="form-group next">
                <select class="form-control" name="gt">
                            <option value="Nam" >Nam</option> 
                            <option value="Nữ" >Nữ</option>  
                            <option value="UK" >Không xác định</option>  
                </select>
              </div>
              <div class="form-group last mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" required class="form-control">
              </div>
              <input type="submit" value="Register"class="btn btn-block btn-success"
              style="color:white; text-decoration: none;">
              <a href="{{URL::to('/loginpage')}}"
             class="btn btn-block btn-info" 
              style="color:white; text-decoration: none;">
                          Come back login page</a>
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