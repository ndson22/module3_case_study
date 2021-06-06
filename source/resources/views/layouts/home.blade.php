<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>@yield('title')</title>
  @toastr_css
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
  <link rel="apple-touch-icon-precomposed" href="#">
  <link rel="shortcut icon" href="#">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Bootstrap -->
  {{-- <link href={{ URL('/assets/css/bootstrap.min.css') }} rel="stylesheet"> --}}
  <!-- Fontawesome -->
  <link href={{ URL("/assets/css/font-awesome.css") }} rel="stylesheet">
  <!-- Flaticons -->
  <link href={{ URL("/assets/css/font/flaticon.css") }} rel="stylesheet">
  <!-- Swiper Slider -->
  <link href={{ URL("/assets/css/swiper.min.css") }} rel="stylesheet">
  <!-- Range Slider -->
  <link href={{ URL("/assets/css/ion.rangeSlider.min.css") }} rel="stylesheet">
  <!-- magnific popup -->
  <link href={{ URL("/assets/css/magnific-popup.css") }} rel="stylesheet">
  <!-- Nice Select -->
  <link href={{ URL("/assets/css/nice-select.css") }} rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href={{ URL("/assets/css/style.css") }} rel="stylesheet">
  <!-- Custom Responsive -->
  <link href={{ URL("/assets/css/responsive.css") }} rel="stylesheet">
  <!-- Color Change -->
    <link rel="stylesheet" class="color-changing" href={{ URL("assets/css/color4.css") }}>


  <!-- Google Fonts -->
  {{-- <link href="fonts.googleapis.com/css0099.css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet"> --}}
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- Notification --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>

<body>
<!-- Navigation -->
<div class="header">
  <header class="full-width">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12 mainNavCol">
                  <!-- logo -->
                  <div class="logo mainNavCol">
                      <a href="index-2.html">
                          <img src={{ URL("assets/img/logo.png") }} class="img-fluid" alt="Logo">
                      </a>
                  </div>
                  <!-- logo -->
                  <div class="main-search mainNavCol">
                      <form class="main-search search-form full-width">
                          <div class="row">
                              <!-- location picker -->
                              <div class="col-lg-6 col-md-5">
                                  <a href="#" class="delivery-add p-relative"> <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                      <span class="address">Location</span>
                                  </a>
                                  <div class="location-picker">
                                      <input type="text" class="form-control" placeholder="Enter a new address">
                                  </div>
                              </div>
                              <!-- location picker -->
                              <!-- search -->
                              <div class="col-lg-6 col-md-7">
                                  <div class="search-box padding-10">
                                      <input type="text" class="form-control" placeholder="Pizza, Burger, Chinese">
                                  </div>
                              </div>
                              <!-- search -->
                          </div>
                      </form>
                  </div>
                  <div class="right-side fw-700 mainNavCol">
                      <div class="gem-points">
                          <a href="#"> <i class="fas fa-concierge-bell"></i>
                              <span>Order Now</span>
                          </a>
                      </div>
                      <div class="catring parent-megamenu">
                          <a href="#"> <span>Pages <i class="fas fa-caret-down"></i></span>
                              <i class="fas fa-bars"></i>
                          </a>
                          <div class="megamenu">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="row">
                                          <div class="col-lg-4 col-md-5">
                                              <div class="ex-collection-box h-100">
                                                  <a href="#">
                                                      <img src="assets/img/nav-1.jpg" class="img-fluid full-width h-100" alt="image">
                                                  </a>
                                                  <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-8 col-md-7">
                                              <div class="row">
                                                  <div class="col-lg-3 col-sm-6">
                                                      <div class="menu-style">
                                                          <div class="menu-title">
                                                              <h6 class="cat-name"><a href="#" class="text-light-black">Home Pages</a></h6>
                                                          </div>
                                                          <ul>
                                                              <li class="active"><a href="index-2.html" class="text-light-white fw-500">Landing Page</a>
                                                              </li>
                                                              <li><a href="homepage-1.html" class="text-light-white fw-500">Home Page 1</a>
                                                              </li>
                                                              <li><a href="homepage-2.html" class="text-light-white fw-500">Home Page 2</a>
                                                              </li>
                                                              <li><a href="homepage-3.html" class="text-light-white fw-500">Home Page 3</a>
                                                              </li>
                                                              <li><a href="homepage-4.html" class="text-light-white fw-500">Home Page 4</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-3 col-sm-6">
                                                      <div class="menu-style">
                                                          <div class="menu-title">
                                                              <h6 class="cat-name"><a href="#" class="text-light-black">Inner Pages</a></h6>
                                                          </div>
                                                          <ul>
                                                              <li><a href="blog.html" class="text-light-white fw-500">Blog Grid View</a>
                                                              </li>
                                                              <li><a href="blog-style-2.html" class="text-light-white fw-500">Blog Grid View 2</a>
                                                              </li>
                                                              <li><a href="blog-details.html" class="text-light-white fw-500">Blog Details</a>
                                                              </li>
                                                              <li><a href="ex-deals.html" class="text-light-white fw-500">Ex Deals</a>
                                                              </li>
                                                              <li><a href="about.html" class="text-light-white fw-500">About Us</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-3 col-sm-6">
                                                      <div class="menu-style">
                                                          <div class="menu-title">
                                                              <h6 class="cat-name"><a href="#" class="text-light-black">Related Pages</a></h6>
                                                          </div>
                                                          <ul>
                                                              <li><a href="restaurant.html" class="text-light-white fw-500">Restaurant</a>
                                                              <li><a href="restaurant-style-1.html" class="text-light-white fw-500">Restaurant 1</a>
                                                              </li>
                                                              <li><a href="restaurant-style-2.html" class="text-light-white fw-500">Restaurant 2</a>
                                                              </li>
                                                              <li><a href="add-restaurant.html" class="text-light-white fw-500">Add Restaurant</a>
                                                              </li>
                                                              <li><a href="list-view.html" class="text-light-white fw-500">List View</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-3 col-sm-6">
                                                      <div class="menu-style">
                                                          <div class="menu-title">
                                                              <h6 class="cat-name"><a href="#" class="text-light-black">Additional Pages</a></h6>
                                                          </div>
                                                          <ul>
                                                              <li><a href="login.html" class="text-light-white fw-500">Login</a>
                                                              </li>
                                                              <li><a href="register.html" class="text-light-white fw-500">Sign-up</a>
                                                              </li>
                                                              <li><a href="checkout.html" class="text-light-white fw-500">Checkout</a>
                                                              </li>
                                                              <li><a href="order-details.html" class="text-light-white fw-500">Order Details</a>
                                                              </li>
                                                              <li><a href="geo-locator.html" class="text-light-white fw-500">Geo Locator</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- mobile search -->
                      <div class="mobile-search">
                          <a href="#" data-toggle="modal" data-target="#search-box"> <i class="fas fa-search"></i>
                          </a>
                      </div>
                      <!-- mobile search -->
                      <!-- user account -->
                      @auth
                      <div class="user-details p-relative">
                          <a href="#" class="text-light-white fw-500">
                              <img src="assets/img/user-1.png" class="rounded-circle" alt="userimg"> <span>Hi, {{ Auth::user()->name }}</span>
                          </a>
                          <div class="user-dropdown">
                              <ul>
                                  
                                    <li>
                                        <a href="order-details.html">
                                            <div class="icon"><i class="flaticon-rewind"></i>
                                            </div> <span class="details">Past Orders</span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="flaticon-user"></i>
                                            </div> <span class="details">Account</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="user-footer"> <a href="#">Sign Out</a>
                                </div>
                                
                              
                          </div>
                      </div>
                      <!-- mobile search -->
                      <!-- user cart -->
                      <div class="cart-btn cart-dropdown">
                          <a href="#" class="text-light-green fw-700"> <i class="fas fa-shopping-bag"></i>
                              <span class="user-alert-cart">3</span>
                          </a>
                          <div class="cart-detail-box">
                              <div class="card">
                                  <div class="card-header padding-15">Your Order</div>
                                  <div class="card-body no-padding">
                                      <div class="cat-product-box">
                                          <div class="cat-product">
                                              <div class="cat-name">
                                                  <a href="#">
                                                      <p class="text-light-green"><span class="text-dark-white">1</span> Chilli Chicken</p> <span class="text-light-white">small, chilli chicken</span>
                                                  </a>
                                              </div>
                                              <div class="delete-btn">
                                                  <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                  </a>
                                              </div>
                                              <div class="price"> <a href="#" class="text-dark-white fw-500">
                        $2.25
                      </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="cat-product-box">
                                          <div class="cat-product">
                                              <div class="cat-name">
                                                  <a href="#">
                                                      <p class="text-light-green"><span class="text-dark-white">1</span> loaded cheese</p> <span class="text-light-white">small, chilli chicken</span>
                                                  </a>
                                              </div>
                                              <div class="delete-btn">
                                                  <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                  </a>
                                              </div>
                                              <div class="price"> <a href="#" class="text-dark-white fw-500">
                        $2.25
                      </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="cat-product-box">
                                          <div class="cat-product">
                                              <div class="cat-name">
                                                  <a href="#">
                                                      <p class="text-light-green"><span class="text-dark-white">1</span> Tortia Chicken</p> <span class="text-light-white">small, chilli chicken</span>
                                                  </a>
                                              </div>
                                              <div class="delete-btn">
                                                  <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                  </a>
                                              </div>
                                              <div class="price"> <a href="#" class="text-dark-white fw-500">
                        $2.25
                      </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="item-total">
                                          <div class="total-price border-0"> <span class="text-dark-white fw-700">Items subtotal:</span>
                                              <span class="text-dark-white fw-700">$9.99</span>
                                          </div>
                                          <div class="empty-bag padding-15"> <a href="#">Empty bag</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="card-footer padding-15"> <a href="checkout.html" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- user cart -->
                  </div>
              </div>
              @endauth
          </div>
      </div>
  </header>
</div>
<div class="main-sec"></div>

    @yield("content")

    
{{-- <script src={{ asset("/assets/js/jquery.min.js") }}></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper -->
<script src={{ URL("/assets/js/popper.min.js") }}></script>
<!-- Bootstrap -->
{{-- <script src={{ URL("/assets/js/bootstrap.min.js") }}></script> --}}

<!-- Range Slider -->
<script src={{ URL("/assets/js/ion.rangeSlider.min.js") }}></script>
<!-- Swiper Slider -->
<script src={{ URL("/assets/js/swiper.min.js") }}></script>
<!-- Nice Select -->
<script src={{ URL("/assets/js/jquery.nice-select.min.js") }}></script>
<!-- magnific popup -->
<script src={{ URL("/assets/js/jquery.magnific-popup.min.js") }}></script>
<!-- sticky sidebar -->
<script src={{ URL("/assets/js/sticksy.js") }}></script>
<!-- Munch Box Js -->
<script src={{ URL("/assets/js/quickmunch.js") }}></script>
<!-- /Place all Scripts Here -->
    <!-- jQuery -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src={{ asset("js/my.js") }}></script>
<script>
@if(Session::has('message'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('message') }}");
@endif

@if(Session::has('error'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ session('error') }}");
@endif

@if(Session::has('info'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.info("{{ session('info') }}");
@endif

@if(Session::has('warning'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.warning("{{ session('warning') }}");
@endif
</script>

</body>
</html>
