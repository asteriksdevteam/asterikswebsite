<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="{{route('home')}}">
        <img class="brand-img d-inline-block" src="{{asset('images/logo/logo.png')}}" alt="brand" />
    </a>
    <ul class="navbar-nav hk-navbar-content">
        @if(Auth::check())
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{asset('dist/img/avatar12.jpg')}}" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                {{-- <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a> --}}
                {{-- <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a> --}}
                {{-- <div class="dropdown-divider"></div> --}}
              
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <a class="dropdown-item"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="{{ route('admin.logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
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
                        <span class="feather-icon"><i data-feather="layout"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                @if(auth()->check() && Auth::user()->sectionCheck('user'))
                <li class="nav-item">
                    <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp_user">
                        <span class="feather-icon"><span class="badge-primary badge-indicator badge-indicator-sm"></span><i data-feather="users"></i></span>
                        <span class="nav-link-text">Users</span>
                    </a>
                    <ul id="app_drp_user" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.user.index')}}">All Users</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('home-pages'))
                <li class="nav-item">
                    <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                        <span class="feather-icon"><span class="badge-primary badge-indicator badge-indicator-sm"></span><i data-feather="home"></i></span>
                        <span class="nav-link-text">Home</span>
                    </a>
                    <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.slider-page')}}">Banner</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.slider.image.index')}}">Banner Images</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.wwd.edit')}}">What We Do</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.slider-page')}}">Technologies</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.testimonial.index')}}">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.award.index')}}">Award</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.tech')}}">Technologies</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('about-us'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.about-us')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">About</span>
                    </a>
                </li>
                @endif
                  @if(auth()->check() && Auth::user()->sectionCheck('career'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.career')}}" >
                        <span class="feather-icon"><i data-feather="list"></i></span>
                        <span class="nav-link-text">Career</span>
                    </a>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('contact-us'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.contact-us')}}" >
                        <span class="feather-icon"><i data-feather="headphones"></i></span>
                        <span class="nav-link-text">Contact Us</span>
                    </a>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('blog'))
                <li class="nav-item">
                    <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp_blog">
                        <span class="feather-icon"><span class="badge-primary badge-indicator badge-indicator-sm"></span><i data-feather="box"></i></span>
                        <span class="nav-link-text">Blog</span>
                    </a>
                    <ul id="app_drp_blog" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.category.index')}}">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.blog-page.index')}}">Blog Page</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.blog.index')}}">Blog </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('services'))
                <li class="nav-item">
                    <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp_service">
                        <span class="feather-icon"><span class="badge-primary badge-indicator badge-indicator-sm badge-pill"></span><i data-feather="package"></i></span>
                        <span class="nav-link-text">Services</span>
                    </a>
                    <ul id="app_drp_service" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                @if(auth()->check() && Auth::user()->sectionCheck('service-category'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.service.category.index')}}">Category</a>
                                </li>
                                @endif
                                @if(auth()->check() && Auth::user()->sectionCheck('service_ub_category'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.service.subcategory.index')}}">Sub Category</a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.services')}}">Service</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->check() && Auth::user()->sectionCheck('seo'))
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.meta.index')}}" >
                        <span class="feather-icon"><i data-feather="server"></i></span>
                        <span class="nav-link-text">Meta</span>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.privacy-policy')}}" >
                        <span class="fa fa-warning" style="font-size: 19px;"></span>
                        <span class="ml-10 nav-link-text">Privacy Policy</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.term-condition')}}" >
                       <span class="fa fa-commenting" style="font-size: 19px;"></span>
                        <span class=" ml-10 nav-link-text">Term And Conditions</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.faqs')}}" >
                       <span class="fa fa-question-circle-o" style="font-size: 19px;"></span>
                        <span class="ml-10 nav-link-text">Faqs</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>