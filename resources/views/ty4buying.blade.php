<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks you</title>
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{{asset('frontend/css/bootstrap.min.css')}}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{{asset('frontend/css/font-awesome.min.css')}}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{{asset('frontend/css/owl.carousel.css')}}}">
    <link rel="stylesheet" href="{{{asset('frontend/css/style.css')}}}">
    <link rel="stylesheet" href="{{{asset('frontend/css/responsive.css')}}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div style="margin-top:10px">
                          <ul class="list-unstyled list-inline">
                        @if(session()->has('username'))
                        <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown"
                                 class="dropdown-toggle" href="#"><i class="fa fa-user"></i><span class="key">{{session('username')}}</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{URL::to('/edituserpage')}}">Profile</a></li>
                                    <li><a href="{{URL::to('/userlogout')}}">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{URL::to('/loginpage')}}"><i class="fa fa-user"></i> Login</a></li>
                        @endif
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <div class="logo" style="text-align: right;">
                        <a><img width="250px" height="250px" src="{{{asset('hinhanh/logo/logo1.jpg')}}}"></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse">
                    </div> 
                </div> 
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Thank you from Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->

                            <div class="container">
                                         <div class="col-md-12">
                                             <div class="product-bit-title text-center">
                                             <strong><h2 style="color:red">Thank you for buying our items</h2></strong>

                                                
                                             <strong><h2 style="color:blue">Pls check your email our bill-email was sent</h2></strong>
                                             <strong><h2><a href="{{URL::to('/')}}">Return homepage</a></h2></strong>
                                            </div>
                                            </div>
                                </div>
                        
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-9">
                </div>
            
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title" style="margin-top:10px">Địa chỉ</h2>
                        <p>180 Đường Cao Lỗ, Phường 4, Quận 8, Thành phố Hồ Chí Minh</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{{asset('frontend/js/owl.carousel.min.js')}}}"></script>
    <script src="{{{asset('frontend/js/jquery.sticky.js')}}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{{asset('frontend/js/jquery.easing.1.3.min.js')}}}"></script>
    
    <!-- Main Script -->
    <script src="{{{asset('frontend/js/main2.js')}}}"></script>


  </body>
</html>