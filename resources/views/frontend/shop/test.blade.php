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
                            <h5>Customer Registration</h5>
                        </div>
                        <div class="checkout-inner">
                            {!! Form::open(['url' => 'customer_reg_store', 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}
                            {{--<form  method="POST" action="{{ route('register') }}">--}}
                            {{ csrf_field() }}
                            <div class="form-group col-sm-12">
                                <label>Fist Name <span>*</span></label>
                                <input type="text" name="fname" required class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Last Name <span>*</span></label>
                                <input type="text" name="lname" required class="form-control"required>
                            </div>
                            <div class="col-sm-12 checkbox form-group">
                                <select class="form-control selectpicker" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Date of Birth<span>*</span></label>
                                <input type="date" name="date_of_birth" class="form-control" id="appointment-date" placeholder="Date of Birth">

                            </div>
                            <div class="form-group col-sm-12">
                                <label>Email Address <span>*</span></label>
                                <input type="email" name="email" required placeholder="Email Address" class="form-control"required>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Account Password <span>*</span></label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Confirm Password <span>*</span></label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="col-sm-12 checkbox form-group">
                                <input type="checkbox" value="create-account" name="create_ac" id="create-ac">
                                <label for="create-ac">Create An Account?</label>
                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                            </div>
                            <div class="button col-sm-12 no-padding text-center">
                                <button type="submit" class="btn black-border">Registration</button>
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