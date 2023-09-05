<header class="desktopmenu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href='#' class='whitelogo'><img src='{{asset('frontend/assets/images/whitelogo.svg')}}' alt='' class="img-fluid"/></a>
            <a href='#' class='logo'><img src='{{asset('frontend/assets/images/logo.svg')}}' alt='' class="img-fluid"/></a>

            <div class="toggle">
                <i class="fa fa-bars"></i>
            </div>
            @php
                $getMenuByArray = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getCategoryBySubCategory');
                // $getMenuByArray= json_decode($getmenu);
             @endphp
            <div class='collapse-menu'>
                <ul>
                    <li><a href='{{route('home')}}'>Home </a></li>
                    <li><a href='{{route('abouts-us')}}'>About </a></li>
                    <li class="drop-down"><a href='#'>Service </a> 
                    
                        <div class="drop-down-menu">
                            <div class="container">
                                <div class="row">
                                    {{-- <div class="col-lg-3">
                                        <div class="menu-widget"><h5>Digital Marketing</h5></div>

                                        <div class="menu-content mt-3">
                                            <ul>
                                                <li><a class="dropdown-item" href="#">SEO</a></li>
                                                <li><a class="dropdown-item" href="#">PPC</a></li>
                                                <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">Search Engine Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">Video Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">E-Commerce Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">Content Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">Email Marketing</a></li>
                                                <li><a class="dropdown-item" href="#">Small Business SEO</a></li>
                                                <li><a class="dropdown-item" href="#">Local SEO</a></li>
                                                <li><a class="dropdown-item" href="#">Google ADS</a></li>
                                            </ul> 
                                        </div>
                                        
                                    </div> --}}
                                    <div class="col-lg-9 ">
                                        <div class="row"> 
                                            @foreach ($getMenuByArray as $getMenuBy )
                                            <div class="col-lg-3">
                                                <div class="menu-widget"><h5>{{$getMenuBy['name']}}</h5></div>
                                                <div class="menu-content mt-3">
                                                    <ul> 
                                                        @foreach ($getMenuBy['sub_category'] as $getMenu )
                                                        <li><a class="dropdown-item" href="{{ route('services',['slug'=>$getMenuBy['slug'],'subslug'=>$getMenu['slug'] ] )}}">{{$getMenu['name']}}</a></li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                                
                                            </div> 
                                            @endforeach
                                            {{-- <div class="col-lg-3 ">
                                                <div class="menu-widget"><h5>IT Services
                                                </h5></div>

                                                <div class="menu-content mt-3">
                                                    <ul>
                                                        <li><a class="dropdown-item" href="#">SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">PPC</a></li>
                                                        <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Search Engine Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Video Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">E-Commerce Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Content Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Email Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Small Business SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">Local SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">Google ADS</a></li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3 ">
                                                <div class="menu-widget"><h5>Digital Marketing</h5></div>

                                                <div class="menu-content mt-3">
                                                    <ul>
                                                        <li><a class="dropdown-item" href="#">SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">PPC</a></li>
                                                        <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Search Engine Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Video Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">E-Commerce Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Content Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Email Marketing</a></li>
                                                        <li><a class="dropdown-item" href="#">Small Business SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">Local SEO</a></li>
                                                        <li><a class="dropdown-item" href="#">Google ADS</a></li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3 ">
                                                <div class="jumbotron">
                                                    <div class="jumbotron-content">
                                                        <div class="menu-widget"><h5>How we work</h5></div>
                                                        <div class="menu-content mt-5">
                                                            <ul>
                                                                <li>
                                                                    <h5>Discovery</h5>
                                                                    <p>Exploring project requirements</p>
                                                                </li>
                                                                <li>
                                                                    <h5>Design</h5>
                                                                    <p>Intuitive and engaging designs</p>
                                                                </li>
                                                                <li>
                                                                    <h5>Development</h5>
                                                                    <p>Agile development processes</p>
                                                                </li>
                                                                <li>
                                                                    <h5>Testing</h5>
                                                                    <p>Incremental testing and QA</p>
                                                                </li>
                                                                <li>
                                                                    <h5>Deployment</h5>
                                                                    <p>Full-function product delivery</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </li>
                    <li><a href='{{route('blog')}}'>Blog </a> </li>
                    <li><a href='{{route('career')}}'>careers </a> </li>
                    <li><a href='{{route('contact')}}'>contact </a> </li>
                    <li><a href='#' class="estimate">Estimate Project </a> </li>
                </ul>
            </div>
        </nav>
    </div>
</header>