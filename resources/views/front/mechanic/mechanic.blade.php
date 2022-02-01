@extends('front.master')

@section('body')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Hire</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">All Mechanic</li>
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
                		<div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="grid-1" data-target="gridview-1" data-toggle="tooltip" data-placement="top" title="1">1</a>
                                <a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top" title="2">2</a>
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="3">3</a>
                                <a class="grid-4" data-target="gridview-4" data-toggle="tooltip" data-placement="top" title="4">4</a>
                                <a class="grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top" title="5">5</a>
                                
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Short By:</label>
                                    <select class="myniceselect nice-select">
                                        <option value="1">Default</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                        <option value="5">Rating (Highest)</option>
                                        <option value="5">Rating (Lowest)</option>
                                        <option value="5">Model (A - Z)</option>
                                        <option value="5">Model (Z - A)</option>
                                    </select>
                                </div>
                                <div class="product-showing">
                                    <label class="select-label">Show:</label>
                                    <select class="myniceselect short-select nice-select">
                                        <option value="1">15</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                <div class="shop-product-wrap grid gridview-3 img-hover-effect_area row">
                	@foreach($mechs as $mech)
                    <div class="col-lg-4">
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="{{$mech->img}}" alt="Uren's Product Image" style="height:300px">
                                            <img class="secondary-img" src="{{$mech->img}}" alt="Uren's Product Image" style="height:300px">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">Top</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="" data-toggle="tooltip" data-placement="top" title="Hire"><i class="fas fa-share"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="{{route('singleMech',['id'=>$mech->id,'cat'=>$mech->cat_id,'area'=>$mech->area_id])}}" data-toggle="tooltip" data-placement="top" title="Details"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i>
                                                    </li>
                                                    <li class="silver-color"><i class="ion-android-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">{{$mech->mech_name}}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">Rate.{{$mech->rate}}Tk</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="uren-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="">
                                        
                                        {{$mechs->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Shop Left Sidebar Area End Here -->
@endsection