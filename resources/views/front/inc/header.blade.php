<?php
    if(Session::get('custId'))
    {
        $customer = Session::get('custId');
        $cust = App\Hiredlabour::where('cust_id',$customer)->get();
    }
?>
<header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="{{route('/')}}">Home</a></li>
                                

                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('members')}}">Members</a></li>
                        
                                <li class=""><a href="{{route('contact')}}">Contact</a></li>
                                <li class=""><a href="{{route('allmechanic')}}">Hire a Mechanic</a></li>
                                

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            @if(Session::get('custId'))
                            <ul>  
                                <li><a href="my-account.html">{{Session::get('custName')}}<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-my_account">
                                        <li class="active"><a href="{{route('custLogout')}}">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @else
                            <ul>  
                                <li><a href="my-account.html">My Account<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-my_account">
                                        <li><a href="{{route('customer_register')}}">Register</a></li>
                                        <li class="active"><a href="{{route('customer_login')}}">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top_area header-sticky bg--sapphire">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li><a href="{{route('/')}}">Home</a></li>
                                

                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('members')}}">Members</a></li>
                        
                                <li class=""><a href="{{route('contact')}}">Contact</a></li>
                                <li class=""><a href="{{route('allmechanic')}}">Hire a Mechanic</a></li>
                                

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3 d-block d-lg-none">
                    <div class="header-logo_area header-sticky_logo">
                        <a href="{{route('/')}}">
                            <img src="{{asset('front/assets/images/menu/logo/logo1.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-9">
                    <div class="header-right_area">
                        <ul>
                            <li class="mobile-menu_wrap d-flex d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap">
                                <a href="#hired" class="minicart-btn toolbar-btn">
                                    <div class="minicart-count_area">
                                        <span class="item-count">
                                            <?php
                                                if(Session::get('custId'))
                                                    {echo count($cust);}
                                                    else{echo 0;}
                                            ?>
                                        </span>
                                        <i class="fas fa-share"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Hired:</span>
                                        <span class="total-price">
                                            <?php
                                                if(Session::get('custId'))
                                                    {echo count($cust);}
                                                    else{echo 0;}
                                            ?> Person</span>
                                    </div>
                                </a>
                            </li>
                            <li class="contact-us_wrap">
                                <a href="tel://+123123321345"><i class="ion-android-call"></i>+880-1945674800</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row">
                <div class="custom-logo_col col-12">
                    <div class="header-logo_area">
                        <a href="{{route('/')}}">
                            <img src="{{asset('front/assets/images/menu/logo/logo1.png')}}" alt="Uren's Logo">
                        </a>
                    </div>
                </div>
                <div class="custom-category_col col-12">
                    <div class="category-menu category-menu-hidden">
                        <div class="category-heading">
                            <h2 class="categories-toggle">
                                <span>Hire By</span>
                                <span>Location</span>
                            </h2>
                        </div>
                        <div id="cate-toggle" class="category-menu-list">
                            <ul> 
                                @foreach($areas as $area)
                                <li><a href="{{route('area_mech',['id'=>$area->id,'area_name'=>$area->area_name])}}">{{$area->area_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-search_col col-12">
                    <div class="hm-form_area">
                        <form action="{{route('src_mech')}}" method="get" class="hm-searchbox">
                            @csrf
                            <select name="src_cat" class="nice-select select-search-category">
                                <option>Category</option>
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <select name="src_area" style="width: 100%;border: none;padding: 0 16px;color: #a3a6c4;">
                                <option>Area</option>
                                @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->area_name}}</option>
                                @endforeach
                            </select>
                            <button class="header-search_btn" type="submit"><i
                                class="ion-ios-search-strong"><span>Search</span></i></button>
                        </form>
                    </div>
                </div>
                <div class="custom-cart_col col-12">
                    <div class="header-right_area">
                        <ul>
                            <li class="mobile-menu_wrap d-flex d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap">
                                <a href="#hired" class="minicart-btn toolbar-btn">
                                    <div class="minicart-count_area">
                                        <span class="item-count">
                                            <?php
                                                if(Session::get('custId'))
                                                    {echo count($cust);}
                                                else{echo 0;}
                                            ?>
                                        </span>
                                        <i class="fas fa-share"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Hired:</span>
                                        <span class="total-price">
                                        <?php
                                                if(Session::get('custId'))
                                                    {echo count($cust);}
                                                else{echo 0;}
                                            ?> Person</span>
                                    </div>
                                </a>
                            </li>
                            <li class="contact-us_wrap">
                                <a href="tel://+123123321345"><i class="ion-android-call"></i>+880-1945674800</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">
                    <form action="#" class="inner-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('members')}}">Members</a></li>
                        <li class=""><a href="{{route('contact')}}">Contact</a></li>
                        <li class=""><a href="{{route('allmechanic')}}">Hire a Mechanic</a></li>                          
                    </ul>   
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                class="mm-text">User
                                Setting</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>