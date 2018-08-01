<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
  ================================================== -->
    <title>@yield('title')</title>
    <meta name="keywords" content="Deshi doctor E-Shop,deshi doctor,medical equipment,medicine,medical equipment and medicine,medical equipment bangladesh, online medical shop bangladesh">
    <meta name="description" content="Deshi doctor e-shop provide all kind of medical equipment and medicine at your door. We are promise to delever best product to you">
    <meta name="author" content="Deshi doctor e-shop">
    <!-- Mobile Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- All Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/bootstrap.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/font-awesome.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/icofont.css')}}" media="screen">
    <!--Owl Carousel-->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/owl.carousel.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/owl.theme.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/owl.transitions.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/jquery.fancybox.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/datepicker.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/odometer-theme-minimal.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/style.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/assets/css/custom.css')}}" media="screen">
    <script type="text/javascript" src="{{asset('front-end/assets/js/jquery.min.js')}}"></script>



</head>

<body class="body-innerwrapper">
<!--Pre Loader-->
<div id="pre_loader"></div>

<section id="top-bar" class="v2 light animate-in fade-in animated">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 topbar-block">
                <ul class="loc_ph">
                    <li><a href="tel:+8801730716111"><i class="fa fa-phone" aria-hidden="true"></i> +88 01730 716 111</a> </li>
                </ul>
                <div class="btn-group">
                    @guest('frontendcustomer')
                    <button type="button" id="forms" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-user" aria-hidden="true"></i> Login
                    </button>
                        @else
                    <i class="fa fa-user btn btn-sm  btn-raised btn-danger waves-effect " aria-hidden="true"><a href="{{route('customerlogout')}}"> Logout</a></i>
                    @endguest
                </div>
            </div>
            <div class="col-sm-6 text-right topbar-block">
                <ul class="socials">
                    <li><a href="https://www.facebook.com/deshidoctor.co/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                </ul>
                <ul class="cart">
                    <li>
                        <a href="http://deshidoctor.com/join"><i class="icofont icofont-doctor" aria-hidden="true"></i> Doctor Join</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<header class="v2 light animate-in fade-in animated">
    <nav class="navbar affix-top" data-spy="affix" data-offset-top="60" id="slide-nav">
        <div class="container">
            <div class="navbar-header col-sm-3">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="logo"><img src="{{asset('front-end/assets/images/logo.png')}}" alt="Columba"></a>
            </div>
            <!--Nav links-->
            <div class=" navbar-collapse col-sm-12 col-md-9 no-padding" id="menu_nav">
                <a href="#" class="closs"><i class="icofont icofont-close-line"></i></a>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="http://deshidoctor.com/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="http://deshidoctor.com/alldoctors">Doctor</a>
                    </li>

                    <li class="dropdown">
                        <a href="http://deshidoctor.com/hospitals">Hospital</a>
                    </li>

                    <li><a href="{{url('product')}}">e-Shop</a></li>
                    <li><a href="http://deshidoctor.com/blog">Blog</a></li>

                    <li class="dropdown">
                        <a href="http://deshidoctor.com/medicaltourism">Medical Tourism</a>
                    </li>
                    <li><a href="http://deshidoctor.com/contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="error-section">
    <div class="container">
        @if(Session::has('success'))
        <div class="error-msg">
            <div class="alert alert-success"></div>
            <div class="alert alert-success">
                    {{session::get('success')}}</div>
        </div>
        @endif
    </div>
</section>

<section id="bucket" >
    <div class="bucket-area">
        <i class="fa fa-shopping-bag"></i>
         <p  id="cartdiv">
             {{count(Cart::content())}}
         </p>
    </div>
    <div class="item-area">
        <table class="table" id="item">
            @if(count(Cart::content()) > 0)
                <tr>
                    <td>#Item </td>
                    <td>Taka</td>
                </tr>
                @foreach(Cart::content() as $item)
                    <tr>
                        <td>{{str_limit($item->name,10)}} </td>
                        <td>{{$item->price}} tk</td>
                    </tr>

                @endforeach
            @else
                <h3><a href="{{url('/cart')}}" >My Cart <i class="fa fa-angle-double-right"></i> </a></h3>
            @endif
        </table>
        <p>
            <a href="{{url('/cart')}}" >View All <i class="fa fa-angle-double-right"></i> </a>
        </p>
    </div>

{{--</section><section id="bucket" >
    <div class="bucket-area">
        <i class="fa fa-shopping-bag"></i>
         <p>
             {{count(Cart::content())}}
         </p>
    </div>
    <div class="item-area">
        <table class="table"  id="cartdiv">
            <tr>
                <td>#Item </td>
                <td>Taka</td>
            </tr>
            @foreach(Cart::content() as $item)
            <tr>
                <td>{{$item->name}} </td>
                <td>{{$item->price}} tk</td>
            </tr>

                @endforeach

        </table>
        <p>
            <a href="{{url('/cart')}}" >View All <i class="fa fa-angle-double-right"></i> </a>
        </p>
    </div>

</section>--}}
@section('content')

@show
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#doctor" aria-expanded="false">Doctor</a></li>
                        <li class=""><a data-toggle="tab" href="#user" aria-expanded="false">User</a></li>
                        <li class=""><a data-toggle="tab" href="#supplier" aria-expanded="false">Supplier</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="doctor" class="tab-pane in fade active" style="width: 100%">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Username or email address</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="" id="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-small">Login</button>
                                    <a href="#" class="simple">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                        <div id="user" class="tab-pane fade" style="width: 100%">
                            <form action="{{route('frontendcustomerlogin')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Username or email address</label>
                                    <input type="text" class="form-control" name="email" id="login_username">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="login_pass">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-small">Login</button>
                                    <a class="btn btn-small" href="{{route('customer_reg')}}">Register</a>

                                    <a href="#" class="simple">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                        <div id="supplier" class="tab-pane fade" style="width: 100%">
                            <form action="{{route('supplierloginsubmit')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Username or email address</label>
                                    <input type="text" class="form-control" name="email" id="login_username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="login_pass">
                                </div>
                                <input type="hidden"name="approval" value="1">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-small">Login</button>
                                    <a class="btn btn-small" href="{{route('supplier_sign_up')}}">Register</a>
                                    <a href="#" class="simple">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer class="v1">
    <section id="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footer-base no-padding">
                    <div class="col-sm-6 footer-block">
                        <a href="http://deshidoctor.com"><img src="http://deshidoctor.com/front-end/assets/images/logo-footer.png" alt="Logo"></a>
                        <p>Deshidoctor.com is a healthcare discovery platform for doctor’s appointment (including video conference), diagnostic home service, blood donor service, doctor’s blog, updated news for health industry and a global facilitator for medical tourism. Deshidoctor.com is a trusted advisor for healthcare and operates on a principle of absolute transparency with all stakeholders</p>
                        <ul class="address">
                            <li>Phone : <a href="tel:01730716111">+88 01730 716 111</a> </li>
                            <li>Email : <a href="mailto:info@deshidoctor.com">info@deshidoctor.com</a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 footer-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="pull-right">Connect with Socal Media</h5>
                            </div>
                            <div  class="col-sm-12">
                                <ul class="social-network pull-right social-circle">
                                    <li><a href="https://www.facebook.com/deshidoctor.co/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javaScript:void(0)" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javaScript:void(0)" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javaScript:void(0)" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="javaScript:void(0)" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div  class="col-sm-12">
                                <div class="company pull-right">
                                    <h3 style="color: white;">A Project of</h3>
                                    <a href="http://felixtechlimited.com" target="_blank">
                                        <img src="http://deshidoctor.com/front-end/assets/images/felix-tech.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Scripts -->
</section>

<script type="text/javascript" src="{{asset('front-end/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="https://use.fontawesome.com/e18447245b.js"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/appear.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/odometer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/steller.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/jquery.bootstrap-touchspin.js')}}"></script>
<script type="text/javascript" src="{{asset('front-end/assets/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<script type="text/javascript" src="{{asset('front-end/assets/js/custom.js')}}"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a7fe891e45fbb001342fe47&product=inline-share-buttons"></script>
@yield('js')


</body>
</html>