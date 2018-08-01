 @extends ('frontend.suppliers.master')
@section('title', 'Deshidoctor | Shop')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Product</h2>
                <small class="col-orange"><?php
                    $message = Session::get('message');
                    if($message){
                        echo " $message ";
                        Session::put('message', null);
                    }
                    ?></small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                {!! Form::open(['url' => '/supplier/product/store', 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" class="form-control" placeholder="Product Title">
                                        </div>
                                        @if ($errors->has('title'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="price" class="form-control" placeholder="Product Price">
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="quantity" class="form-control" placeholder="Product Quantity">
                                        </div>
                                        @if ($errors->has('quantity'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="product_id" class="form-control" placeholder="Product ID">
                                        </div>
                                        @if ($errors->has('product_id'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group drop-custum">
                                        {{Form::select('brand_id',$brands,null,['class' => 'form-control','placeholder' => 'Select Brand'])}}
                                    </div>
                                    @if ($errors->has('brand_id'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('brand_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group drop-custum">
                                        {{Form::select('category_id',$categories,null,['class' => 'form-control','placeholder' => 'Select Category'])}}
                                    </div>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <input type="hidden" value="{{Auth::guard('supplier')->user()->id}}" name="supplier_id">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{Form::textarea('description','',['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Write description about this product'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12 m-t-30">
                                    {!! Form::label('Product Image') !!}
                                    {!! Form::file('file') !!}
                                </div>
                                <div class="col-sm-4 col-xs-12 m-t-30">
                                    {!! Form::label('Product Image 2') !!}
                                    {!! Form::file('file2') !!}
                                </div>
                                <div class="col-sm-4 col-xs-12 m-t-30">
                                    {!! Form::label('Product Image 3') !!}
                                    {!! Form::file('file3') !!}
                                </div>
                                <div class="col-xs-4 m-t-10 m-t-30">
                                    {!! Form::label('feature ') !!}
                                    <input type="checkbox" name="feature" class="checkbox">
                                </div>

                                <div class=" col-xs-4 m-t-30">
                                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
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