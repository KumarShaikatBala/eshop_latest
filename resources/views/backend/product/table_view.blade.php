@extends ('backend.master')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Products</h2><a class="btn float-right  btn-raised bg-grey waves-effect" href="{{url('/product-view')}}"> back to Grid View</a>
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
                            <div class="table-responsive-m">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Supplier</th>
                                        <th>Category</th>
                                        <th>code</th>
                                        <th>Brand</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1 ;?>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->supplier->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->product_id}}</td>
                                        <td>{{$product->brand->brand_name}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a href="{{ url('product-edit/'.$product->id)}}" class=" btn btn-raised btn-sm">Edit</a>
                                            {!! Form::open(['url' => ['product-destroy',$product->id], 'method' => 'post']) !!}
                                            <button type="submit" class="btn  btn-raised btn-danger btn-sm waves-effect">Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    <?php $i++ ;?>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="color-bg"></div>


@endsection