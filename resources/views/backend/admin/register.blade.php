<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Deshi Doctor Supplier</title>
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
        <h1 class="title"><span>Admin</span>Register <span class="msg">Register a new membership</span></h1>
        <div class="col-md-12">
            {!! Form::open(['route' => 'adminregister','class'=>'col-xs-12','method' => 'post']) !!}

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="name" placeholder="Name Admin" required="" autofocus>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">security</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">vpn_key</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required="">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-raised g-bg-cyan waves-effect">SIGN UP</button>
            </div>
            <div class="m-t-10 m-b--5 align-center">
                <a href="{{route('adminlogin')}}">You already have a membership?</a>
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