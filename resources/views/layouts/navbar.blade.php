<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="dashboard1.html">
        <img class="brand-img d-inline-block" src="{{asset('images/logo/logo.png')}}" alt="brand" />
    </a>
    <ul class="navbar-nav hk-navbar-content">
        @if(Auth::check())
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                <div class="dropdown-divider"></div>
              
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <a class="dropdown-item"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
            </div>
        </li>
        @else
        <li class="d-inline-block">
            <a href="{{route('login')}}" class="pe-2 text-d-none text-black">
               Sign In
            </a>
         </li>
        @endif
    </ul>
</nav>
<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <div class="nav-header">
                <span>Main Menu</span>
                <span>Menu</span>
            </div>
            <hr class="nav-separator">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                @if(auth()->check() && Auth::user()->sectionCheck('home-pages'))
                <li class="nav-item">
                    <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                        <span class="feather-icon"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill"></span><i data-feather="package"></i></span>
                        <span class="nav-link-text">Home</span>
                    </a>
                    <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider.image.index')}}">Slider Images</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">Our Client</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">What We Do</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">Technologies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">Tech Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider-page')}}">Award</a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                {{-- @if(auth()->check() && Auth::user()->sectionCheck('about-us'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">About</span>
                    </a>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('blog'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Blog</span>
                    </a>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('services'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Services</span>
                    </a>
                </li>
                @endif --}}
            </ul>
        </div>
    </div>
</nav>