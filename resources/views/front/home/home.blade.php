@extends('front.master')
@section('body')
       <!-- Begin Popular Search Area -->
        <div class="popular-search_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popular-search">
                            <label>Popular Search:</label>
                            <a href="javascript:void(0)">plumber,</a>
                            <a href="javascript:void(0)">mechanic,</a>
                            <a href="javascript:void(0)">electricians,</a>
                            <a href="javascript:void(0)">contractor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Search Area End Here -->

        <!-- Slider -->
        @include('front.inc.slider')
        <!-- End slider -->

        <!-- Begin Uren's Shipping Area -->
        @include('front.inc.shipping')
        <!-- Uren's Shipping Area End Here -->

        <!-- Begin Featured Categories Area -->
        <!-- Featured Categories Area End Here -->

        <!-- Begin Uren's Banner Area -->
        <div class="uren-banner_area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img-1"></div>
                            <div class="banner-content">
                                <span class="offer">Get 20% off your hire</span>
                                <h4>Plumber</h4>
                                <h3>Get a Plumber</h3>
                                <p>Explore and immerse in exciting 360 content with
                                    Fulldive’s all-in-one virtual reality platform</p>
                                <div class="uren-btn-ps_left">
                                    <a class="uren-btn" href="#">Hire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img-1 banner-img-2"> </div>
                            <div class="banner-content">
                                <span class="offer">Save $120 when you hire</span>
                                <h4>Vehicle , Car</h4>
                                <h3>Car Mechanics</h3>
                                <p>Explore and immerse in exciting 360 content with
                                    Fulldive’s all-in-one virtual reality platform</p>
                                <div class="uren-btn-ps_left">
                                    <a class="uren-btn" href="shop-left-sidebar.html">Hire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Banner Area End Here -->

        <!-- Begin Uren's Product Area -->
        <div class="uren-product_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title_area">
                            <span>Top List</span>
                            <h3>Frequent Category</h3>
                        </div>
                        <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6,
                        "arrows" : true
                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                            ]'>
                            @foreach($cats as $cat)
                            <div class="product-slide_item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="{{route('catmech',['id'=>$cat->id,'category_name'=>$cat->name])}}">
                                                <img class="primary-img" src="{{$cat->img}}" alt="Uren's Product Image">
                                                <img class="secondary-img" src="{{$cat->img}}" alt="Uren's Product Image">
                                            </a>
                                            <div class="sticker">
                                                <span class="sticker">Top</span>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="uren-add_compare" href="{{route('catmech',['id'=>$cat->id,'category_name'=>$cat->name])}}" data-toggle="tooltip" data-placement="top" title="Details"><i
                                                            class="ion-android-options"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <h6><a class="product-name" href="single-product.html">{{$cat->name}}</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">{{Str::words($cat->description,5)}}</span>
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
            </div>
        </div>
        <!-- Uren's Product Area End Here -->

        <!-- Begin Uren's Banner Three Area -->
        <div class="uren-banner_area uren-banner_area-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img"></div>
                            <div class="banner-content">
                                <span class="contact-info"><i class="ion-android-call"></i> +123 321 345</span>
                                <h4>Anytime & Anywhere </h4>
                                <h3>You are.</h3>
                                <p>Est erat faucibus purus, eget viverra nulla sem vitae
                                    Quisque id sodales libero...</p>
                                <a href="javascript:void(0)" class="read-more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Banner Three Area End Here -->
@endsection