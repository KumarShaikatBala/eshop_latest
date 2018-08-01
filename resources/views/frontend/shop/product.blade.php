@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Shop')
@section ('js')
    <script>

        $(document).ready(function () {
            <?php $maxP = count($products);
            for ($i=0;$i<$maxP;$i++){?>
            $('#cartAdd<?php echo $i ;?>').click(function(event) {
                 event.preventDefault();
                $('#cartAdd<?php echo $i ;?>').hide();
                $('#cartAdd<?php echo $i ?>').show().fadeIn(10);
                var product<?php echo $i ;?> = $('#pId<?php echo $i ;?>').val();
                $('#cartAdd<?php echo $i ;?>').html('Cart Added');
                $('#cartAdd<?php echo $i ;?>').css('background','orange');
                $('#cartAdd<?php echo $i ;?>').css('left','110px');
                $.ajax({
                    type:'get',
                    url:'<?php echo url('/cart/addtocart');?>/'+ product<?php echo $i ;?>,
                    success:function (response) {
                       // console.log(response);
                        $("#cartdiv").html(response);

                }

                });
            });
            <?php } ?>
        });

    </script>
@endsection

@section('content')
    <section id="breadcrumb" class="space light-overlay" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 bread-block">
                    <h2>Products</h2>
                    <p>Deshi Doctor Shop</p>
                </div>
                <div class="col-sm-6 bread-block text-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Shop</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="shop" class="space">
        <div class="container">
            <div class="row">
                <aside class="col-sm-3">
                    <div class="widget category animate-in move-up">
                        <h5>Categories</h5>
                        <ul>
                            @if(count($categories) > 0)
                                @foreach($categories as $categorie)
                            <li><a href="{{url('/category/products/'. $categorie->id)}}">{{$categorie->name}}<span>({{count($categorie->products)}})</span></a> </li>
                                @endforeach
                               @else
                                <li><a href="#">No Category</a> </li>
                             @endif
                        </ul>
                    </div>
                    <div class="widget category animate-in move-up">
                        <h5>Brands</h5>
                        <ul>
                           @if(count($brands) > 0)
                                @foreach($brands as $brand)
                            <li><a href="{{url('/brand/products/'. $brand->id)}}">{{$brand->brand_name}}<span>({{count($brand->products)}})</span></a> </li>
                                @endforeach
                             @else
                            <li><a href="#">No Brand</a> </li>
                           @endif
                        </ul>
                    </div>

                </aside>
                <div class="col-sm-9 shop-base no-padding">
                    <div class="col-sm-12 no-padding products">
                        <div class="col-sm-12 no-padding product-base">
                            @if(isset($brand_name))
                                <h3><i>brand: {{$brand_name->brand_name}}</i></h3>
                            @endif
                                @if(isset($cat_name))
                                    <h3><i>category: {{$cat_name->name}}</i></h3>
                            @endif
                           @if(count($products) > 0)
                                <?php $countP = 0 ?>
                                @foreach($products as $product)
                                        <input type="hidden" value="{{$product->id}}" id="pId<?php echo $countP ?>">
                                <div class="col-sm-4 product-block animate-in move-up">
                                    <div class="product-image center">
                                        <a href="{{url('product/'. $product->id)}}">
                                            <img src="/storage/uploads/product_img/{{$product->image}}" alt="Columba Products">
                                        </a>
                                        {{--<a href="{{url('cart/addtocart',$product->id)}}" class="btn">Add  Cart</a>--}}
                                        <button class="btn" id="cartAdd<?php echo $countP ?>">Add to Cart</button>
                                    </div>
                                    <div class="product-description">
                                        <h4><a href="{{url('product/'. $product->id)}}">{{$product->title}}</a> </h4>
                                        <div class="price">&#2547 {{$product->price}}</div>
                                    </div>
                                </div>
                                    <?php  $countP++ ; ?>
                                 @endforeach
                               @else
                                    <h3><i>No Product Found</i></h3>
                          @endif

                        </div>
                        <div class="col-sm-12 co-pagination animate-in move-up">
                            <ul class="pagination">
                               {{$products->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
