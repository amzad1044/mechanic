<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admin/img/user1.png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{auth::user()->name}}</h1>
            <p>{{auth::user()->email}}</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="{{(request()->is('home')) ? 'active': ''}}"><a href="{{route ('home')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li class="{{(request()->is('admin/area')) ? 'active': ''}}"><a href="{{route ('area')}}"> <i class="fa fa-location-arrow"></i>Area </a></li>

                <li class="{{(request()->is('admin/category')) ? 'active': ''}}"><a href="{{route ('category')}}"> <i class="fa fa-align-center"></i>Category </a></li>
                
        </ul>
        <span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li class="{{(request()->is('admin/mechanic')) ? 'active': ''}}"> <a href="{{route ('mechanic')}}"> <i class="fa fa-users"></i>Mechanics </a></li>
          <li> <a href="{{route('allhire')}}"> <i class="icon-writing-whiteboard"></i>Hires </a></li>
        </ul>
      </nav>