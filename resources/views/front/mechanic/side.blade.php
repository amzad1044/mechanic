            <div class="col-lg-3 col-md-5 order-2 order-lg-1 order-md-1">
                <div class="uren-sidebar-catagories_area">
                    <div class="category-module uren-sidebar_categories">
                        <div class="category-module_heading">
                            <h5>Categories</h5>
                        </div>
                        <div class="module-body">
                            <ul class="module-list_item">
                                <li>
                                	@foreach($cats as $cat)
                                    <a href="{{route('catmech',['id'=>$cat->id,'category_name'=>$cat->name])}}">{{$cat->name}}</a>
                                    @endforeach
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="uren-sidebar_categories">
                        <div class="uren-categories_title">
                            <h5>Area ( {{$areas->count()}} )</h5>
                        </div>
                        <ul class="sidebar-checkbox_list">
                        	@foreach($areas as $area)
                            <li>
                                <a href="{{route('area_mech',['id'=>$area->id,'area_name'=>$area->area_name])}}">{{$area->area_name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>