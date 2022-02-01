<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="{{route ('home')}}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Mechanic</strong><strong>Lagbe?</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">M</strong><strong>L</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown">
                  <a id="navbarDropdownMenuLink1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i>
                    <span class="badge dashbg-1">
                        {{count($hires)}}
                    </span>
                  </a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">

                @foreach($hires as $hire)
                <a href="{{route('allhire')}}" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="{{asset('admin/img/download.png')}}" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   
                    <strong class="d-block"></strong>
                    <span class="d-block">{{$hire->cust_name}}</span>
                    <small class="date d-block">{{ $hire->created_at->format('d-m-Y H:i') }}</small>
                  </div>
                </a>
                @endforeach
                  
                </div>
            </div>

            <!-- Log out               -->
            <div class="list-inline-item logout">
                <a id="logout" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"
                  class="nav-link">Logout <i class="icon-logout"></i>
                </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
            </div>
          </div>
        </div>
      </nav>
    </header>