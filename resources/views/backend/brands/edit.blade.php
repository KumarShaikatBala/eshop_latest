@extends ('frontend.suppliers.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Brand</h2>
                <small class="text-muted"><?php
                    $message = Session::get('message');
                    if($message){
                        echo " $message ";
                        Session::put('message', null);
                    }
                    ?></small>
                <small class="text-muted">Welcome to Brand Edit Page</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Brands Information <small>Description text here...</small> </h2>
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
                                {!! Form::open(['url' => 'brand-update/'.$brands->id, 'method' => 'PATCH' ,'enctype'=>'multipart/form-data']) !!}
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{ Form::text('brand_name',$brands->brand_name,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="brand_catagory">
                                            <option value="">Brand For</option>
                                            <option value="medicine">Medicine</option>
                                            <option value="equipment">Equipmment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{ Form::text('brand_description',$brands->brand_description,['class'=>'form-control']) }}
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