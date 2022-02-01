@extends('front.master')

@section('body')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Hire</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Mechanic</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->

<!-- Begin Uren's Shop Left Sidebar Area -->
<div class="shop-content_wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('front.mechanic.side')
            <div class="col-lg-9 col-md-7 order-1 order-lg-2 order-md-2">
                <!-- Begin Uren's Single Product Area -->
                <div class="sp-area">
                    <div class="container-fluid">
                        <div class="sp-nav">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="sp-img_area">
                                        <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                        "slidesToShow": 1,
                                        "arrows": false,
                                        "fade": true,
                                        "draggable": false,
                                        "swipe": false,
                                        "asNavFor": ".sp-img_slider-nav"
                                        }'>
                                            <div class="single-slide red zoom">
                                                <img src="{{ URL::asset($mechs->img)}}" alt="Uren's Product Image">
                                            </div>
                                            
                                        </div>
                                        <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                        "slidesToShow": 3,
                                        "asNavFor": ".sp-img_slider",
                                        "focusOnSelect": true,
                                        "arrows" : true,
                                        "spaceBetween": 30
                                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                            ]'>
                                            <div class="single-slide red">
                                                <img src="{{asset('front/assets/images/product/large-size/1.jpg')}}" alt="Uren's Product Thumnail">
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="sp-content">
                                        <div class="sp-heading">
                                            <h5><a href="#">{{$mechs->mech_name}}</a></h5>
                                        </div>
                                        
                                        <div class="rating-box">
                                            <ul>
                                                @if($review_avg==1)
                                                <li><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li> 
                                                @elseif($review_avg==2)
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                @elseif($review_avg==3)
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                @elseif($review_avg==4)
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                @elseif($review_avg==5)
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                <li><i class="ion-android-star"></i></li>
                                                @else
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                <li class="silver-color"><i class="ion-android-star"></i></li> 
                                                <li class="silver-color"><i class="ion-android-star"></i></li> 
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="sp-essential_stuff">
                                            <ul>
                                                <li>Category : <a href="javascript:void(0)">{{$cat->name}}</a></li>
                                                <li>Location : <a href="javascript:void(0)">{{$area->area_name}}</a></li>
                                                <li>Availability: <a href="javascript:void(0)">Available</a></li>
                                                <li>Rate : <a href="javascript:void(0)"><span>{{$mechs->rate}} Tk.</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="qty-btn_area">
                                            <ul>
                                                <li><a class="qty-cart_btn" href="{{route('hire',['id' => $mechs->id])}}" class="btn btn-primary" id="delete-confirm">Hire</a></li>
                                            </ul>
                                        </div>
                                        <div class="uren-tag-line">
                                            <h6>Tags:</h6>
                                            <a href="javascript:void(0)">vehicle</a>,
                                            <a href="javascript:void(0)">car</a>,
                                            <a href="javascript:void(0)">bike</a>
                                        </div>
                                        <div class="uren-social_link">
                                            <ul>
                                                <li class="facebook">
                                                    <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                        <i class="fab fa-twitter-square"></i>
                                                    </a>
                                                </li>
                                                <li class="youtube">
                                                    <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                        <i class="fab fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="instagram">
                                                    <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Uren's Single Product Area End Here -->

                <!-- Begin Uren's Single Product Tab Area -->
                <div class="sp-product-tab_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sp-product-tab_nav">
                                    <div class="product-tab">
                                        <ul class="nav product-menu">
                                            <li><a data-toggle="tab" href="#reviews"><span>Reviews ({{$review->count()}})</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content uren-tab_content">
                                        <div id="reviews" class="tab-pane" role="tabpanel">
                                            <div class="tab-pane active" id="tab-review">
                                                <form class="form-horizontal" id="review_form">
                                                    @csrf

                                                    @foreach($review as $rev)
                                                    <div id="review">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                                
                                                                <tr>
                                                                    <td style="width: 50%;"><strong>{{$rev->fname}}</strong></td>
                                                                    <td class="text-right">{{date('d/m/Y', strtotime($rev->created_at))}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <p>{{$rev->comment}}</p>
                                                                        <div class="rating-box">
                                                                            <ul>
                                                                                @if($rev->rating==1)
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>

                                                                                @elseif($rev->rating==2)
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                @elseif($rev->rating==3)
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                @elseif($rev->rating==4)
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                                @elseif($rev->rating==5)
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                <li><i class="ion-android-star"></i></li>
                                                                                @else

                                                                                @endif
                                                                                
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    @endforeach
                                                   
                                                    <h2>Write a review</h2>
                                                    <div class="form-group required second-child">
                                                        <div class="col-sm-12 p-0">
                                                            <label class="control-label">Share your opinion</label>
                                                            <textarea class="review-textarea" name="comment" id="comment"></textarea>
                                                            <input type="hidden" id="mech_id" name="mech_id" value="{{$mechs->id}}" name="">
                                                            @if(Session::get('custId'))
                                                               <input type="hidden" id="cust_id" name="cust_id" value="{{Session::get('custId')}}"> 
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group last-child required">
                                                        <div class="col-sm-12 p-0">
                                                            <div class="your-opinion">
                                                                <label>Your Rating</label>
                                                                <span>
                                                            <select class="star-rating" name="rating" id="rating">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="uren-btn-ps_right">
                                                            @if(Session::get('custId'))
                                                            <button type="submit" id="submit" class="save uren-btn-2">Continue</button>
                                                            @else
                                                            <a href="{{route('customer_login')}}" class="save uren-btn-2">Join to comment</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Uren's Single Product Tab Area End Here -->


            </div>
        </div>
    </div>
</div>


<!-- Begin Uren's Related Area -->
<div class="uren-product_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title_area">
                    <span></span>
                    <h3>Related Worker</h3>
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
                    @foreach($related as $rel)
                    <div class="product-slide_item">
                        <div class="inner-slide">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{ URL::asset($rel->img)}}" alt="Uren's Product Image">
                                    
                                    </a>
                                    <div class="sticker">
                                        <span class="sticker">Top</span>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Hire"><i class="fas fa-share"></i></a>
                                            </li>
                                            <li><a class="uren-add_compare" href="{{route('singleMech',['id'=>$rel->id,'cat'=>$rel->cat_id,'area'=>$rel->area_id])}}" data-toggle="tooltip" data-placement="top" title="Details"><i
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
                                        <h6><a class="product-name" href="single-product.html">{{$rel->mech_name}}</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">Rate.{{$rel->rate}} Tk</span>
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


@endsection