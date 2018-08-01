@extends ('backend.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Brands</h2>
                <small class="text-muted"><?php
                    $message = Session::get('message');
                    if($message){
                        echo " $message ";
                        Session::put('message', null);
                    }
                    ?></small>
                <small class="text-muted">Welcome to Brands Page</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Brands Information <small>Description text here...</small> </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                {!! Form::open(['url' => 'brand-store', 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="brand_name" class="form-control" placeholder="Brand Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="brand_owner_name" class="form-control" placeholder="Brand Owner Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="brand_catagory">
                                            @foreach($catagories as $catagory)
                                            <option value="">Brand Catagory</option>
                                            <option value="{{$catagory->name}}">{{$catagory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    {!! Form::label('Brand Logo') !!}
                                    {!! Form::file('brand_logo') !!}
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="brand_description" class="form-control" placeholder="Description about the Brand">
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