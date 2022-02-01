<div class="featured-categories_area">
            <div class="container-fluid">
                <div class="section-title_area">
                    <span>Top Featured Mechanics</span>
                    <h3>Featured Categories</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-categories_slider uren-slick-slider slider-navigation_style-1" data-slick-options='{
                        "slidesToShow": 4,
                        "spaceBetween": 30,
                        "arrows" : true
                       }' data-slick-responsive='[
                                             {"breakpoint":1599, "settings": {"slidesToShow": 3}},
                                             {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                             {"breakpoint":768, "settings": {"slidesToShow": 1}}
                                         ]'>
                            @foreach($cats as $cat)
                            <div class="slide-item">
                                <div class="slide-inner">
                                    <div class="slide-image_area">
                                        <a href="shop-left-sidebar.html">
                                            <img src="{{asset($cat->img)}}" alt="Uren's Featured Categories" style="border-radius: 10px;">
                                        </a>
                                    </div>
                                    <div class="slide-content_area">
                                        <h3><a href="{{$cat->id}}">{{$cat->name}}</a></h3>
                                        
                                        <ul class="product-item">
                                            @foreach($macs as $mac)
                                            @if($mac->cat_id==$cat->id)
                                            <li>
                                                <a href=""><i class="fa fa-arrow-right"></i>{{$mac->mech_name}}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        <div class="uren-btn-ps_left">
                                            <a class="uren-btn" href="shop-left-sidebar.html">Read More</a>
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