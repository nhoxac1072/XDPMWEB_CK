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
    <title>Shop Ban Hang</title>
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{{asset('frontend/css/bootstrap.min.css')}}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{{asset('frontend/css/font-awesome.min.css')}}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{{asset('frontend/css/owl.carousel.css')}}}">
    <link rel="stylesheet" type="text/css" href="{{{asset('frontend/css/style.css')}}}">
    <link rel="stylesheet" type="text/css" href="{{{asset('frontend/css/responsive.css')}}}">

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
                        <a><img style="margin-bottom: -40px;" width="250px" height="250px" src="{{{asset('hinhanh/logo/logo1.jpg')}}}"></a>
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
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li class="active" ><a>Home</a></li>
                        <li><a href="{{URL::to('/cart')}}">Cart&nbsp;&nbsp;
                        <i class="fa fa-shopping-cart"></i>
                        <span class="product-count" style="background-color:red;">
                        {{Cart::count()}}</span></a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Single product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1 style="color:red; text-align:center;"><strong>{{Session::get('mes')}}</strong></h1>
                        {{Session::forget('mes')}}  
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-4" style="height:400px">
                    
            <div class="single-sidebar">
                        <ul style="background-color:#5A88CA;">
                        <li>
                        <a href="{{URL::to('/')}}" style="color:white; text-align:center;">ALL</a>
                        </li>
                        </ul>

                        <ul style="background-color:#5A88CA;">
                        <li class="dropdown dropdown-small">
                        <a href="" data-toggle="dropdown" style="color:white; text-align:center;">LOẠI SẢN PHẨM <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="margin-left:120px;">
                        @foreach($product as $category)
                            <li style="text-align:center;"><a href="{{URL::to('/category',$category->cateid)}}">{{$category->name}}</a></li>
                        @endforeach
                        </ul>
                        </li>
                        </ul>

                        <ul style="background-color:#5A88CA;">
                        <li class="dropdown dropdown-small">
                        <a href="" data-toggle="dropdown" style="color:white; text-align:center;">THƯƠNG HIỆU SẢN PHẨM <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="margin-left:120px;">
                        @foreach($dongsp as $brand)
                            <li style="text-align:center;"><a href="{{URL::to('/brand',$brand->brandid)}}">{{$brand->name_dongSP}}</a></li>
                        @endforeach
                        </ul>
                        </li>
                        </ul>


                        
                    </div>
                </div>
                

                <div class="col-md-8">
                <div class="col-sm-6"> 
                <img width="400x" height="400px" src="{{{asset('hinhanh/product/'.$showproduct->image)}}}" alt="">
                </div>
                        <div class="col-sm-6">
                            <div class="product-inner">
                                    <h2 class="product-name">{{$showproduct->namesp}}</h2>
                                    <div class="product-inner-price">
                                        <ins>${{$showproduct->price}}</ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form action="{{URL::to('/singleaddcart')}}" class="cart" method="post">
                                    {{csrf_field()}}
                                        <input type="hidden" name="product_id" value="{{$showproduct->id}}">
                                        <div class="quantity">
                                        <select name="size">
                            <option>Size=?</option>
                            <option value="S" >S</option> 
                            <option value="M" >M</option>  
                            <option value="L" >L</option>  
                            <option value="XL" >XL</option>  
                            <option value="XXL" >XXL</option>
                            <option value="XXXL" >XXXL</option>
                            <option value="XNXX" >XNXX</option>
                            </select>
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="{{URL::to('/category',$showproduct->cateid)}}">{{$catename->name}} </a>/ Brand: <a href="{{URL::to('/brand',$showproduct->brandid)}}">{{$brand->name_dongSP}} </a></p>
                                    </div> 
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Product Content</a></li>
                                        </ul>
                                    <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <p>{{$showproduct->desc}}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <p>{{$showproduct->content}}</p>
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