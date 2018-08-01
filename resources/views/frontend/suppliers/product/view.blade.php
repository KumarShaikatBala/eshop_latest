@extends ('frontend.suppliers.master')
@section('content')


<section class="content">
<div class="container-fluid">
<div class="block-header">
<h2>All Products</h2>
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
        @if(count($products) > 0)
            @foreach($products as $product)

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="member-card verified">
                                <div class="thumb-xl member-thumb">
                                    <img src="storage/uploads/product_img/{{$product->image}}" height="100" width="150" class="img-circle" alt="profile-image">
                                    <i class="zmdi zmdi-info" title="verified user"></i>
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">{{$product->title}}</h4>
                                    <p class="text-muted"><b>Category:</b> {{$product->category->name}} <br> <span> <b>Code:</b> {{$product->product_id}} </span>
                                        <br> <b>Product quantity:</b> {{$product->quantity}} piece</p><br>

                                </div>

                                <p class="text-muted"><b>Price:</b> {{$product->price}} Taka</p>
                                <a href="{{ url('/supplier/product/edit/'.$product->id)}}" class=" btn btn-raised btn-sm">Edit</a>
                                {!! Form::open(['url' => ['/supplier/product/delete',$product->id], 'method' => 'post']) !!}
                                <button type="submit" class="btn  btn-raised btn-danger btn-sm waves-effect">Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                @else
                    <h2>No Product Found </h2>
            @endif

    </div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="color-bg"></div>


@endsection