@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Home')
@section('content')
    <!--Bread Crumb-->
    <section id="breadcrumb" class="space light-overlay" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 bread-block">
                    <h2>CheckOut</h2>
                    <p>Page Title With Descripsion</p>
                </div>
                <div class="col-sm-6 bread-block text-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.html">Home</a>
                        </li>
                        <li class="active">CheckOut</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--Check Out-->
    <section id="checkout" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 choose-block no-padding">
                    {!! Form::open(['url' => 'address-store', 'method' => 'post']) !!}
                    <div class="col-md-2"></div>
                        <div class="col-sm-12 col-md-8 checkout-item">
                            <div class="inner">
                                <div class="checkout-heading text-center col-sm-12">
                                    <h5>Billing Address</h5>
                                </div>
                                <div class="checkout-inner">
                                    <div class="form-group col-sm-12">
                                        <label>Fist Name <span>*</span></label>
                                        <input type="text" name="first_name" required class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" name="last_name" required class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Address <span>*</span></label>
                                        <input type="text" name="address_primary" placeholder="Street Address" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text" name="city" placeholder="Town / City " class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Phone No <span>*</span></label>
                                        <input type="text" name="mobile" required placeholder="Phone No" class="form-control">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" value="Checkout Done " class="btn black lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-2"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection