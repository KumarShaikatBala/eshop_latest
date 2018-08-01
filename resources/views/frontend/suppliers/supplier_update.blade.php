@extends ('frontend.suppliers.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Update Supplier</h2>
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

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                {!! Form::open(['url' => 'supplier_update_store','class'=>'col-xs-12','method' => 'post' ,'enctype'=>'multipart/form-data']) !!}

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Name Supplier" required="" autofocus value="{{$data->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="" value="{{$data->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="brand" placeholder="Brand or Company Name" required="" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label> Brand Logo</label>
                                            <input type="file" class="form-control" name="brand_logo" ></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="address" placeholder="Brand or Company Address" required="" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="mobile" placeholder="phone Number" required="" autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="bill" placeholder="Billing Informatiion" required="" autofocus>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required>
                                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                                        </div>
                                    </div>
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