@extends('front.master')

@section('body')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>About Us</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->
<!-- Begin Uren's About Us Area -->
<div class="about-us-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="overview-img text-center img-hover_effect">
                    <a href="#">
                        <img class="img-full" src="{{asset('front/assets/images/about-us/1.jpg')}}" alt="Uren's About Us Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                <div class="overview-content">
                    <h2>Welcome To <span>Mechanic</span> Lagbe?</h2>
                    <p class="short_desc">We Provide Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Repudiandae nisi fuga facilis, consequuntur, maiores eveniet voluptatum, omnis possimus
                        temporibus aspernatur nobis animi in exercitationem vitae nulla! Adipisci ullam illum quisquam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, nulla veniam? Magni aliquid
                        asperiores magnam. Veniam ex tenetur.</p>
                    <div class="uren-about-us_btn-area">
                        <a class="about-us_btn" href="shop-left-sidebar.html">Hire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Uren's About Us Area End Here -->

<!-- Begin Uren's Project Countdown Area -->
<div class="project-count-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-briefcase-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">2169</h2>
                        <span>Project Done</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-wineglass-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">869</h2>
                        <span>Awards Winned</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-lightbulb-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">689</h2>
                        <span>Hours Worked</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-happy-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">2169</h2>
                        <span>Happy Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Project Countdown Area End Here -->

<!-- Begin Uren's Team Area -->
<div class="team-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section_title-2">
                    <h3>Our Team</h3>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="{{asset('front/images/foisal.jpg')}}" alt="Our Team Member" height="350">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Amzad Hossain</h3>
                        <p>Web Developer</p>
                        <a href="#">amzad1044@gmail.com</a>
                        <div class="uren-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/amzadhossainfoisal" data-toggle="tooltip" target="_blank" title="Facebook">
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
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="{{asset('front/images/faisal.jpg')}}" alt="Our Team Member" height="350">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Md Faisal</h3>
                        <p>Web Designer</p>
                        <a href="#">faisal@gmail.com</a>
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
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="{{asset('front/images/rimon.jpg')}}" alt="Our Team Member" height="350">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Rimon Dewan</h3>
                        <p>Content Writer</p>
                        <a href="javascript:void(0)">rimon@gmail.com</a>
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
            </div> <!-- end single team member -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-thumb img-hover_effect">
                        <a href="#">
                            <img src="{{asset('front/images/zahid.jpg')}}" alt="Our Team Member" height="350">
                        </a>
                    </div>
                    <div class="team-content text-center">
                        <h3>Zahid</h3>
                        <p>Marketing officer</p>
                        <a href="#">zahid@gmail.com</a>
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
            </div> <!-- end single team member -->
            
        </div>
    </div>
</div>
<!-- Uren's Team Area End Here -->
@endsection