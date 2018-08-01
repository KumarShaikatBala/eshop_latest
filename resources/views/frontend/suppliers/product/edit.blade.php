@extends ('frontend.suppliers.master')
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
                                {!! Form::open(['url' => '/supplier/product/update/'.$product->id, 'method' => 'post' ,'enctype'=>'multipart/form-data']) !!}
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" value="{{$product->title}}" class="form-control" placeholder="Product Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        {!! Form::label('Price') !!}
                                        <div class="form-line">
                                            <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Product Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        {!! Form::label('Quantity') !!}
                                        <div class="form-line">
                                            <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control" placeholder="Product Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="product_id" value="{{$product->product_id}}" class="form-control" placeholder="Product ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {{ Form::textarea('description',$product->description,['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Write description about this product']) }}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    {!! Form::label('Product Image') !!}
                                    {!! Form::file('file') !!}
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    {!! Form::label('Product Image 2') !!}
                                    {!! Form::file('file2') !!}
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    {!! Form::label('Product Image 3') !!}
                                    {!! Form::file('file3') !!}
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