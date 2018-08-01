@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Shop')
@section('content')

    <!--Client Logo-->
    <section id="breadcrumb" class="space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 no-padding owl-carousel owl-theme team-slider">
                    @if(count($featured_products) > 0)
                        @foreach($featured_products as $product)
                    <div class="item">
                        <div class="col-sm-12">
                            <a href="javaScript:void(0)">
                                <img src="/storage/uploads/product_img/{{$product->image}}">
                            </a>
                        </div>
                    </div>
                        @endforeach
                        @endif

                </div>
            </div>
        </div>
    </section>

    <section id="shop" class="space bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 ">
                    <aside class="no-padding">
                        <div class="widget category animate-in move-up">
                            <h5>Categories</h5>
                            <div class=" bg-light mb-3">
                                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                            </div>
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
                </div>
                <div class="col-sm-9">
                    <style>
                        * {
                            box-sizing: border-box;
                        }
                        .cards {
                            display: flex;
                            flex-wrap: wrap;
                            align-items: stretch;
                        }
                        .card {
                            width: 300px;
                            margin: 10px;
                            border: 1px solid #ccc;
                            box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
                            overflow: hidden;
                            min-height: 300px;
                        }
                        .card2 {
                            width: 400px;
                            margin: 10px;
                            border: 1px solid #ccc;
                            box-shadow: 2px 2px 6px 2px  rgba(0,0,0,0.3);
                            max-height: 100px;
                            overflow: hidden;
                            float:left;


                        }.card3 {
                            width: 200px;
                            margin: 10px;
                            border: 1px solid #ccc;
                            box-shadow: 2px 2px 6px 2px  rgba(0,0,0,0.3);
                            max-height: 100px;
                            overflow: hidden;
                            float:left;


                        }
                        .card img {
                            max-width: 100%;
                        }
                        .card2 img {
                            max-width: 100%;
                        }
                        .card .text {
                            padding: 0 20px 20px;

                        }
                        .card .text > button {
                            background: gray;
                            border: 0;
                            color: white;
                            padding: 10px;
                            width: 100%;
                        }
                    </style>

                    <main class="cards">
                        <article class="card">
                            <div class="col-xs-12" id="slider">
                                <!-- Top part of the slider -->
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="http://placehold.it/470x480&text=zero"></div>

                                            <div class="item" data-slide-number="1">
                                                <img src="http://placehold.it/470x480&text=1"></div>

                                            <div class="item" data-slide-number="2">
                                                <img src="http://placehold.it/470x480&text=2"></div>

                                            <div class="item" data-slide-number="3">
                                                <img src="http://placehold.it/470x480&text=3"></div>

                                            <div class="item" data-slide-number="4">
                                                <img src="http://placehold.it/470x480&text=4"></div>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                                <!--/Slider-->
                            </div>
                        </article>
                        <article class="card2">
                            <img src="http://placehold.it/470x500&text=zero" alt="..." >
                        </article>
                        <article class="card3">
                            <img src="http://placehold.it/470x500&text=zero" alt="..." >
                        </article>
                        <article class="card">
                            <img src="/pix/samples/15l.jpg" alt="Sample photo">
                            <div class="text">
                                <h3>Best in class</h3>
                                <p>Imagine jumping into that boat, and just letting it sail wherever the wind takes you...</p>
                                <button>Just do it...</button>
                            </div>
                        </article>
                        <article class="card">
                            <img src="/pix/samples/25m.jpg" alt="Sample photo">
                            <div class="text">
                                <h3>Dynamically innovate supply chains</h3>
                                <p>Holisticly predominate extensible testing procedures for reliable supply chains.</p>
                                <button>Here's why</button>
                            </div>
                        </article>
                        <article class="card">
                            <img src="/pix/samples/16l.jpg" alt="Sample photo">
                            <div class="text">
                                <h3>Sanity check</h3>
                                <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
                                <button>Stop here</button>
                            </div>
                        </article>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

<script>
    $('#sliderbox').SliderBox({
      lBoxWidth: 310,
      lBoxHeigth: 310,
      BoxWidth: 150,
      BoxHeigth: 150,
      divider: 10,
      time: 5000,
    });
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 10000
        })
    });
</script>

@endsection