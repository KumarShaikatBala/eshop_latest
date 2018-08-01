@extends('backend.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Suppliers</h2>
                <small class="text-muted"><?php
                    $message = Session::get('message');
                    if($message){
                        echo " $message ";
                        Session::put('message', null);
                    }
                    ?></small>
                <small class="text-muted">Welcome to Suppliers Page</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Suppliers Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <div class="row clearfix">
                                {!! Form::open(['url' => 'supplier-update/.$suppliers->id', 'method' => 'PATCH' ,'enctype'=>'multipart/form-data']) !!}

                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{Form::label('Edit Suppliers Name')}}
                                            {{ Form::text('name',$suppliers->name,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{--<input type="text" name="username" class="form-control" placeholder="User Name">--}}
                                            {{ Form::text('username',$suppliers->username,['class'=>'form-control']) }}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="date_of_birth" class="datepicker form-control" placeholder="Date of birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="gender">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12">
                                    {!! Form::label('Supplier Image') !!}
                                    {!! Form::file('user_image') !!}
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="website" class="form-control" placeholder="Enter Website Url">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" placeholder="Re Enter password">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="catagory">
                                            <option value="">-- Select Product Type/Catory --</option>
                                            <option value="medicine">medicine</option>
                                            <option value="equiepment">equipment</option>
                                            <option value="drag">drag</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catagory" class="form-control" placeholder="Add Product Type/Catory">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="catagory" class="form-control" placeholder="Add Product Details and Brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="quantity" class="form-control" placeholder="Add Product Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="description" class="form-control" placeholder=" Details Description">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-xs-12">
                                    {!! Form::label('Product Image') !!}
                                    {!! Form::file('product_image') !!}
                                </div>

                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                    <button type="submit" class="btn btn-raised">Cancel</button>
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="color-bg"></div>
@endsection