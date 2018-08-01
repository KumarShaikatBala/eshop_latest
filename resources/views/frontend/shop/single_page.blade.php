@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Shop')
@section ('js')
    <script>

        $(document).ready(function () {
            $('#successMsg').hide();
          $('#subBtn').click(function (event) {
              event.preventDefault();
              var qty = $('#demo_vertical').val();
              var proId = $('#proId').val();
              $('#subBtn').html('Product has been added to cart');
              $('#subBtn').css('background','orange')
              $.ajax({
                  type:'get',
                  url:'<?php echo url('cart/singlePage/addtocart');?>/'+ proId,
                  data:"qty=" + qty,
                  success:function (response) {

                      $("#cartdiv").html(response);
                  }

              });
          });
            $("#img_01,#img_02,#img_03").elevateZoom({
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500
            });


        });

      /*  $("#img_02").elevateZoom({
            zoomType	: "inner",
            cursor: "crosshair",
        });
        $("#img_03").elevateZoom({
            zoomType	: "inner",
            cursor: "crosshair",
        });
*/
    </script>
@endsection
@section('content')
    <!-- Product Detail-->
    <section id="single-product" class="space-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="product-view ">
                        <div class="full-product-img">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <a data-fancybox="gallery" href="/storage/uploads/product_img/{{$product->image}}">
                                        <img alt="Single Product" id="img_01" class="img_01" src="/storage/uploads/product_img/{{$product->image}}" data-zoom-image="/storage/uploads/product_img/{{$product->image}}">
                                    </a>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <a data-fancybox="gallery" href="/storage/uploads/product_img/{{$product->image2}}">
                                        <img alt="Single Product" id="img_02" class="img_01" src="/storage/uploads/product_img/{{$product->image2}}" data-zoom-image="/storage/uploads/product_img/{{$product->image2}}">
                                    </a>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <a data-fancybox="gallery" href="/storage/uploads/product_img/{{$product->image3}}">
                                        <img alt="Single Product" id="img_03" class="img_01" src="/storage/uploads/product_img/{{$product->image3}}" data-zoom-image="/storage/uploads/product_img/{{$product->image3}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="small-products">
                            <ul class="nav nav-tabs">

                                <li>@if( !empty($product->image2))


                                    <a data-toggle="tab" href="#menu1">
                                        <img src="/storage/uploads/product_img/{{$product->image2}}" width="80px" height="80px" alt="Single Product">
                                    </a>
                                </li>
                                @endif
                                <li class="active">
                                    @if( !empty($product->image))
                                    <a data-toggle="tab" href="#home">
                                        <img src="/storage/uploads/product_img/{{$product->image}}" width="80px" height="80px" alt="Single Product">
                                    </a>
                                    @endif
                                </li>
                                <li>
                                    @if( !empty($product->image3))
                                    <a data-toggle="tab" href="#menu2">
                                        <img src="/storage/uploads/product_img/{{$product->image3}}" width="80px" height="80px" alt="Single Product">
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 single-block">
                    <input type="hidden" value="{{$product->id}}" id="proId">
                    <h4>{{$product->title}}</h4>
                    <div class="price">&#2547 {{$product->price}} </div>
                    <h6>P-Code:<strong> #{{$product->product_id}}</strong> </h6>
                    <p> </p>
                    <div class="cart-info col-sm-12 no-padding">
                       <form>
                        <div class="quantity">
                            <input id="demo_vertical" type="text" value="1" name="demo_vertical">
                        </div>
                        <div class="button">
                            <button type="submit" id="subBtn" class="btn black-border">add to cart</button>
                            <div class="alert alert-success" id="successMsg"></div>
                        </div>
                        <div class="wishlist">
                            <a href="#"><i class="fa fa-heart"></i> </a>
                        </div>
                       </form>
                    </div>
                    <div class="product-info col-sm-12 no-padding">
                        <ul class="meta">
                            <li><span>Brand:</span> {{$product->brand->brand_name}}</li>
                        </ul>
                        <ul class="socials">
                            <div class="sharethis-inline-share-buttons"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="reviews-areas col-sm-12 space-top">
                    <div class="reviw-title col-sm-3 no-padding">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                        </ul>
                    </div>
                    <div class="revew-content-area col-sm-9 no-padding">
                        <div class="tab-content col-sm-12 no-padding">
                            <div id="description" class="tab-pane fade in active col-sm-12 no-padding">
                                    {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Related Products-->
    <section id="products" class="space">
        <div class="container">
            <div class="col-sm-6 col-sm-offset-3 text-center main-heading">
                <h2>Similar Items</h2>
            </div>
            <div class="row">
                @foreach($items as $item)
                <div class="col-sm-3 product-block">
                    <div class="product-image center">
                        <a href="{{url('product/'. $item->id)}}">
                            <img src="/storage/uploads/product_img/{{$item->image}}" alt="Columba Products">
                        </a>
                    </div>
                    <div class="product-description">
                        <h5><a href="{{url('product/'. $item->id)}}">{{$item->title}}</a> </h5>
                        <div class="price">&#2547 {{$item->price}}</div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection