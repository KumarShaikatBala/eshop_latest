@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Home')
@section('content')
    <section id="checkout" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                        <div class="col-sm-6 checkout-item">
                            <div class="main-login main-center">
                                {!! Form::open(['url' => 'customer_reg_store', 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Your full Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" required name="name" id="name"  placeholder="Enter your full Name"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" required name="email" id="email"  placeholder="Enter your Email"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Username</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <select class="form-control selectpicker" required name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password_confirmation" id="confirm"  placeholder="Confirm your Password"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="{{url('customerlogin')}}">Login</a>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
            </div>
        </div>
    </section>
    @endsection