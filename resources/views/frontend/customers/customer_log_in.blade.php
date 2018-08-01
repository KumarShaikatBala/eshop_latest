
@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Home')
@section('content')
    <section id="checkout" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 checkout-item">
                    <div class="inner">
                        <div class="checkout-heading text-center col-sm-12">
                            <h5>Customer Log In</h5>
                            <h5 class="alert">
                                @if(Session::has('success'))
                                {{session::get('success')}}
                            @endif
                            </h5>
                        </div>
                        <div class="checkout-inner">
                            {!! Form::open(['route' => 'frontendcustomerlogin', 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}
                            {{--<form  method="POST" action="{{ route('login') }}">--}}
                                {{ csrf_field() }}
                            <div class="form-group col-sm-12">
                                <label>Email Address <span>*</span></label>
                                <input type="email" name="email" required placeholder="Email Address" class="form-control"required>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Account Password <span>*</span></label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="button col-sm-12 no-padding text-center">
                                <button type="submit" class="btn black-border">Log In</button>
                            </div>
                            <div class="button col-sm-12 no-padding text-center">
                                <a href="customer_reg" class="btn black-border">Registration</a>
                            </div>
                            {{--</form>--}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection