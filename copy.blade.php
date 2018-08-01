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
                <div class="col-sm-3 ">
                    <aside class="no-padding">
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
                </div>
                <div class="col-sm-9">
                    @foreach($categories as $category)
                        <div class="row cate-divider">
                            <div class="cat-item-sec no-padding">
                                <div class="col-sm-12">
                                    <div class="cat-item-heading">
                                        <h4> <i class="icofont icofont-architecture-alt"></i>
                                            @if(isset($category))
                                                {{$category->name}}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-sm-6 work-block">
                                    <div class="work-item animate-in move-up animated">
                                        <a data-fancybox="gallery" href="{{ asset('front-end/assets/images/cat1.jpg') }}">
                                            <img class="img-responsive" src="{{ asset('front-end/assets/images/cat1.jpg') }}" alt="Columba">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 work-block" id="sub-cat">
                                    <div class="row">
                                        <div class="col-sm-6 work-item animate-in move-up animated">
                                            <div class="cat-gutter-left" style="margin-bottom: 15px">
                                                <a data-fancybox="gallery" href="{{ asset('front-end/assets/images/cat3.jpg') }}">
                                                    <img class="img-responsive" src="{{ asset('front-end/assets/images/cat2.jpg') }}" alt="columba">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 work-item animate-in move-up animated">
                                            <div class="cat-gutter-left" style="margin-bottom: 15px">
                                                <a data-fancybox="gallery" href="{{ asset('front-end/assets/images/cat3.jpg') }}">
                                                    <img class="img-responsive" src="{{ asset('front-end/assets/images/cat2.jpg') }}" alt="columba">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 work-item animate-in move-up animated">
                                            <div class="cat-gutter-left">
                                                <a data-fancybox="gallery" href="{{ asset('front-end/assets/images/cat3.jpg') }}">
                                                    <img class="img-responsive" src="{{ asset('front-end/assets/images/cat2.jpg') }}" alt="columba">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 work-item animate-in move-up animated">
                                            <div class="cat-gutter-left">
                                                <a data-fancybox="gallery" href="{{ asset('front-end/assets/images/cat3.jpg') }}">
                                                    <img class="img-responsive" src="{{ asset('front-end/assets/images/cat2.jpg') }}" alt="columba">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
    </script>

@endsection