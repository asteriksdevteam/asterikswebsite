@extends('frontend.layouts.app')
@section('frontendcontent')

<section class="aboutbanner-section">
    <div class="containercenter container">
        <div class="justify-content-center row">
            <div class="col-lg-12 col-12">
                <div class="aboutbanner-content">
                    <h2 class="bannerheading">{{ $getAboutsData['slider_heading']}}</h2>
                    <p class="bannertext">
                        {{ $getAboutsData['slider_heading_content']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-profile">
    <div class="container">
        <div class="row">
            <div class="my-auto col-lg-6 col-md-6">
                <h2 class="title"> {{ $getAboutsData['our_story_heading']}}</h2>
                <p>
                    {{ $getAboutsData['our_story']}}
                </p>
            </div>
            <div class="col-lg-6 col-md-6"><img src="{{ $getAboutsData['path'].$getAboutsData['our_story_image']}}" class="company aboutallimg" alt="" /></div>
        </div>
    </div>
</section>

<section class="company-profile">
    <div class="container">
        <div class="row">
            <div class="order1 col-lg-6 col-md-6"><img src="{{ $getAboutsData['path'].$getAboutsData['mission_image']}}" class="company aboutallimg" alt="" /></div>
            <div class="my-auto order2 col-lg-6 col-md-6">
                <h2 class="title">{{ $getAboutsData['mission_statment_heading']}}</h2>
                <p>
                    {{ $getAboutsData['mission_statment']}}    
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mission-section">
    <div class="container">
        <div class="row">
            <div class="my-auto col-lg-6 col-md-6">
                <h2 class="title">{{ $getAboutsData['company_profile_heading']}}</h2>
                <p>
                    {{ $getAboutsData['company_profile']}}
                </p>
            </div>
            <div class="col-lg-6 col-md-6"><img src="{{ $getAboutsData['path'].$getAboutsData['our_company_image']}}" class="company aboutallimg" alt="" /></div>
        </div>
    </div>
</section>

<section class="vission-section">
    <div class="container">
        <div class="row">
           
            <div class="order1 col-lg-6 col-md-6"><img src="{{ $getAboutsData['path'].$getAboutsData['vision_image']}}" class="company aboutallimg" alt="" /></div>
            <div class="my-auto order2 col-lg-6 col-md-6">
                <h2 class="title">{{ $getAboutsData['Vision_statment_heading']}}</h2>
                <p>
                    {{ $getAboutsData['Vision_statment']}}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="countupsection">
    <div class="container">
        <div class="row">
            <div class="countupwrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="countup-item">
                            <h1><div class="counter" id="counter1"></div></h1>
                            <p>Year in Business</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="countup-item">
                            <h1><div class="counter" id="counter2"></div></h1>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="countup-item">
                            <h1><div class="counter" id="counter3"></div></h1>
                            <p>Service Users</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="countup-item">
                            <h1><div class="counter" id="counter4"></div></h1>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourteam-section pb-0">
    <div class="container">
        <div class="justify-content-center text-center row">
            <h2 class="title">The Heartbeat of Exceptional Leadership</h2>
            <p class="desc">Talent may win you games, but intelligence and teamwork can win you the title of champion.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ourteamdiv1">
                    <div class="ourteamdiv-content1">
                        <img src="{{asset('assets/images/leaders/l1.png')}}" class="team1" alt="" />
                        <h3 class="subtitle mt-4 mb-0">muhammad junaid</h3>
                        <p>CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ourteamdiv2">
                    <div class="ourteamdiv-content2">
                        <img src="{{asset('assets/images/leaders/l2.png')}}" class="team1" alt="" />
                        <h3 class="subtitle mt-4 mb-0">Abdul Sami Khan</h3>
                        <p>Development Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ourteamdiv3">
                    <div class="ourteamdiv-content3">
                        <img src="{{asset('assets/images/leaders/l3.png')}}" class="team1" alt="" />
                        <h3 class="subtitle mt-4 mb-0">Ashar Ali</h3>
                        <p>Marketing Managner</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ourteamdiv4">
                    <div class="ourteamdiv-content4">
                        <img src="{{asset('assets/images/leaders/l4.png')}}" class="team1" alt="" />
                        <h3 class="subtitle mt-4 mb-0">Fatima Zia</h3>
                        <p>HR Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <div class="justify-content-center text-center row">
            <div class="col-lg-8 col-md-12 col-xs-12"><h2 class="title">Partnering With Tech Leaders Worldwide</h2></div>
        </div>
        <div class="mt-2 row">
            <div class="owl-carousel partner-carousel">
                <div class="item">
                    <div class="award-item">
                        <img class="partner" src="{{asset('assets/images/partnerlogo1.png')}}" alt="Image 0" />
                    </div>                        
                </div>
                <div class="item">
                    <div class="award-item">
                        <img class="partner" src="{{asset('assets/images/partnerlogo2.png')}}" alt="Image 0" />
                    </div>                        
                </div>
                <div class="item">
                    <div class="award-item">
                        <img class="partner" src="{{asset('assets/images/partnerlogo3.png')}}" alt="Image 0" />
                    </div>                        
                </div>
                <div class="item">
                    <div class="award-item">
                        <img class="partner" src="{{asset('assets/images/partnerlogo4.png')}}" alt="Image 0" />
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>

<section class="calltoaction-section calltoaction-section2">
    <div class="container">
        <div class="justify-content-center text-center row">
            <div class="col-lg-8 col-12">
                <h2 class="title">Try Us For Your New Project</h2>
                <div class="mt-5"><a class="orangebtn" href="#">Start a Project</a></div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    var counter1 = {{ $getAboutsData['year_experience'] }};
    var counter2 = {{ $getAboutsData['happy_customer'] }};
    var counter3 = {{ $getAboutsData['award_achievement'] }};
    var counter4 = {{ $getAboutsData['project_complete'] }};
   
   
</script>
@push('scripts')


@endpush