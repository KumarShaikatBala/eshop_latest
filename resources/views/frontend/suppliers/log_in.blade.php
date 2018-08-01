<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/swift/hospital/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 16:54:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Deshi Doctor Log In</title>
    <!-- Favicon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/login.css')}}" rel="stylesheet">

    <!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('admin/assets/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Supplier</span>Login <span class="msg">Sign in to start your session</span></h1>
        <h1 class="title"><span class="msg">
                 @if(Session::has('success'))
                    {{session::get('success')}}
                @else(Session::has('passwordnotmatch'))
                    {{session::get('passwordnotmatch')}}
                    @endif
            </span></h1>
        <div class="col-md-12">
            {!! Form::open(['route' => 'supplierloginsubmit','class'=>'col-xs-12','method' => 'post']) !!}
            {{ csrf_field() }}
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus value="{{old('email')}}">
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input  type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
            <input type="hidden"name="approval" value="1">
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-raised waves-effect g-bg-cyan" value="SIGN IN">
                        <a href="supplier_sign_up" class="btn btn-raised waves-effect">SIGN UP</a>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('admin/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
</body>
</html>