@extends('frontend.layouts.app')
@section('frontendcontent')
<section class="careerbanner">
    <div class="containercenter container">
        <div class="row">
            <div class="col-lg-12">
                <div class="careercontent">
                    <h1 class="bannerheading">{{$career['slider_heading']}}</h1>
                    <p class="bannertext">
                        {{$career['slider_heading_content']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recruiter-section">
    <div class="container">
        <div class="justify-content-center text-center row">
            <div class="col-lg-9">
                <h2 class="title">Our Recruitment Process</h2>
                <p class="desc">Asteriks aims to build high-quality software while also fostering an enjoyable work environment that allows everyone the opportunity to reach their highest potential.</p>
            </div>
        </div>
        <div class="mt-4 row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/images/recruiter1.png" alt="" />
                    <h3 class="subtitle">Apply</h3>
                    <p>{{$career['apply']}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/images/recruiter2.png" alt="" />
                    <h3 class="subtitle">Review</h3>
                    <p>{{$career['review']}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/images/recruiter3.png" alt="" />
                    <h3 class="subtitle">Interviews</h3>
                    <p>{{$career['interviews']}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/images/recruiter4.png" alt="" />
                    <h3 class="subtitle">Onboarding</h3>
                    <p>{{$career['onboarding']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactsection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-lg-4 offset-md-4">
                <div class="form">
                    <h3 class="subtitle">apply for an opening position now</h3>
                    <form action="{{route('front.postServicesData')}}" method="post">
                        @csrf
                        <div class="gx-3 row">
                            <div class="col-lg-6"><input placeholder="Name*" name="name" class="form-control" required="" type="text" /></div>
                            <div class="col-lg-6"><input placeholder="Email*" name="email" class="form-control" required="" type="text" /></div>
                        </div>
                        <div class="gx-3 row">
                            <div class="col-lg-6"><input placeholder="phone*" name="phone_number" class="form-control" required="" type="text" /></div>
                            <div class="col-lg-6">
                                <select class="form-select form-control" name="subject">
                                    <option disabled="">select position</option>
                                    <option>frontend</option>
                                    <option>backtend</option>
                                    <option>html</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12"><textarea rows="7" class="form-control" placeholder="summary"></textarea></div>
                        <div class="mt-3 justify-content-center row py-3"><button type="submit" class="orangebtn">submit</button></div>
                    </form>
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                       <span>  {!! \Session::get('success') !!}</span>
                        
                    </div>
                @endif
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