@extends('frontend.layouts.app')
@section('frontendcontent')
    <section class="homebanner">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="owl-carousel hslider p-0">
                    <div class="item">
                        <div class="item-slider" style="background: url({{asset(@$slider1[0]['slider_images'][0]['imagePath'])}}) no-repeat center;">
                            <div class="container containercenter">
                                <div class="row">
                                    <h1 class='bannerheading'>{{$slider1[0]['Heading']??'Heading'}}</h1>
                                    <p class='bannertext'>{{$slider1[0]['Description']??'Description'}}</p>
                                    <div>
                                      <a href='#' class='orangebtn'>
                                        Let’s Talk
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-slider2" style="background: url({{asset(@$slider2[0]['slider_images'][0]['imagePath'])}}) no-repeat center;">
                            <div class="container containercenter">
                                <div class="row">
                                    <h1 class='bannerheading'>{{$slider2[0]['Heading']??'Heading'}}</h1>
                                    <p class='bannertext'>{{$slider2[0]['Description']??'Descriptions'}}</p>
                                    <div>
                                      <a href='#' class='orangebtn'>
                                        Let’s Talk
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-slider3" style="background: url({{asset(@$slider3[0]['slider_images'][0]['imagePath'])}}) no-repeat center;">
                            <div class="container containercenter">
                                <div class="row">
                                    <h1 class='bannerheading'>{{$slider3[0]['Heading']??'Heading'}}</h1>
                                    <p class='bannertext'>{{$slider3[0]['Description']??'Descriptions'}}</p>
                                    <div>
                                      <a href='#' class='orangebtn'>
                                        Let’s Talk
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clientlogos-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="clientlogos-leftcontent"><p>Trusted by</p></div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="owl-carousel clientlogos">
                        @foreach ($trustedby[0]['slider_images'] as $imagePath)
                        <div class="item">
                            <img src="{{asset($imagePath['imagePath'])}}" class="cw" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="hekpbusiness-section">
        <div class="container">
            <div class="justify-content-center text-center row">
                <div class="col-lg-8 col-12">
                    <h2 class="title">{{$whatWeDo['Heading']}}</h2>
                    <p class="desc">{{$whatWeDo['Description']}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="cardbox">
                        <div><img src="{{asset($whatWeDo['business_idea_image'])}}" class="smallicon" alt="" /></div>
                        <h3 class="subtitle">{{$whatWeDo['business_idea_heading']}}</h3>
                        <p>{{$whatWeDo['business_idea_desc']}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="cardbox">
                        <div><img src="{{asset($whatWeDo['finance_planning_image'])}}" class="smallicon" alt="" /></div>
                        <h3 class="subtitle">{{$whatWeDo['finance_planning_heading']}}</h3>
                        <p>{{$whatWeDo['finance_planning_desc']}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="cardbox">
                        <div><img src="{{asset($whatWeDo['market_analysis_image'])}}" class="smallicon" alt="" /></div>
                        <h3 class="subtitle">{{$whatWeDo['market_analysis_heading']}}</h3>
                        <p>{{$whatWeDo['market_analysis_desc']}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="cardbox">
                        <div><img src="{{asset($whatWeDo['develop_web_image'])}}" class="smallicon" alt="" /></div>
                        <h3 class="subtitle">{{$whatWeDo['develop_web_heading']}}</h3>
                        <p>{{$whatWeDo['develop_web_desc']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutsection">
        <div class="container">
            <div class="row">
                <div class="my-auto col-lg-12 col-md-12">
                    <div class="aboutsection-content">
                        <h6 class="subtitle2">Company about</h6>
                        <div class="aboutsection-inntercontent">
                            <h2 class="title">{{$about[0]['Heading']}}</h2>
                            <p>
                                {{$about[0]['Description']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogsection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gx-0 row">
                        <div class="col-lg-8 col-md-8">
                            <div class="blog1">
                                <div class="gx-0 row">
                                    <div class="col-lg-6 col-md-6"><div class="blog3-content"></div></div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="blog4-content">
                                            <div class="blog4-innercontent">
                                                <p>Build your online presence as it develops like many others have, and let expert technicians and digital producers to create functions that captivate your target audience.</p>
                                                <a href="#">
                                                    Let’s Talk
                                                   <i class="fa fa-arrow-right arrowright"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="blog2">
                                <div class="blog1-content">
                                    <p>Asteriks digital turns your ideas into attractive designs, amazing experiences, and tempting brands that capture and amaze your audience.</p>
                                    <a href="#">
                                        Let’s Talk
                                        <i class="fa fa-arrow-right arrowright"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies-section">
        <div class="container">
            <div class="justify-content-center text-center row">
                <div class="col-lg-8 col-12">
                    <h2 class="title">Discover The Power Of Cutting-Edge Technologies!</h2>
                    <p class="desc">Unleash innovation with our seamless fusion of IT expertise and pioneering marketing strategies. Elevate your business to new heights, harnessing the potential of tomorrow tech today.</p>
                </div>
            </div>
            <div mt="4" class="justify-content-center text-center row">
                <ul class="technologies-tabs nav nav-tabs" role="tablist">
                    @foreach ($techCaregory as $key => $techCat)
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{strtolower(str_replace(' ','_',$techCat->Name))}}-tab" data-bs-toggle="tab" data-bs-target="#{{strtolower(str_replace(' ','_',$techCat->Name))}}-tab-pane" role="tab" aria-controls="{{strtolower(str_replace(' ','_',$techCat->Name))}}-tab-pane" aria-selected="{{$key == 0 ? 'true' : 'false'}}">{{$techCat->Name}}</button>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($techCaregory as $key => $techCat)

                    <div role="tabpanel" class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="{{strtolower(str_replace(' ','_',$techCat->Name))}}-tab-pane" aria-labelledby="{{strtolower(str_replace(' ','_',$techCat->Name))}}-tab">
                        <div class="row">
                            @foreach (collect($techs)->where('category_id',$techCat->id) as $key => $tech)
                            <div class="col">
                                <img src="{{asset(($tech['slider_images'][0]['imagePath'])??'images/no_img.png')}}" class="tw" alt="" />
                                <p class="mt-3 tectext">{{$tech['Name']}}</p>
                            </div>
                            @endforeach
                     
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>
    </section>
    
    <section class="awards-section">
        <div class="container">
            <div class="justify-content-center text-center row">
                <div class="col-lg-8">
                    <h2 class="title">Awards &amp; Recognitions</h2>
                    <p class="desc">Recipient of prestigious awards and widespread recognition for excellence in innovation, design, and customer satisfaction, showcasing our commitment to industry&nbsp;leadership.</p>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel awards-carousel">
                    @foreach ($awards as $award)
                    <div class="item">
                        <div class="award-item">
                            <img class="awardsimg" src="{{asset($award['Image'])}}" alt="Image 0" />
                            <h3 className='subtitle'>{{$award['Heading']}}</h3>
                            <p>{{$award['Description']}}</p>
                        </div>                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="p-0 container-fluid">
            <div class="row">
                <div class="owl-carousel testimonial-carousel testimonialcarousel">
                    @foreach ($testimonials as $key => $testimonial)
                    <div class="item" style="background-image: url({{asset($testimonial['Image'])}}); background-position: center top;">
                        <div class="testimonial-inneritens">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="testimonial-item">
                                            <img src="{{asset('frontend/assets/images/quote.png')}}" class="img-fluid quote" alt="" />
                                            <p>
                                                {{$testimonial['Message']}}
                                            </p>
                                            <div class="starlist">
                                                <ul>
                                                    @for ($i = 0; $i < (int)$testimonial['Rating']; $i++)
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    @endfor
                                                </ul>
                                                <p class="reviews-text">{{$testimonial['Rating']}}</p>
                                                <h1 class="bigtitle"><span>{{$key+1}}</span>/{{count($testimonials)}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="testimonial-rightdiv">
                                            <h2 class="title">{{$testimonial['Name']}}</h2>
                                            <p>{{$testimonial['Position']}}</p>
                                        </div>
                                    </div>
                                    <div class="comaquote"><img src="{{asset('frontend/assets/images/comaquote.png')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            <img class="partner" src="{{asset('frontend/assets/images/partnerlogo1.png')}}" alt="Image 0" />
                        </div>                        
                    </div>
                    <div class="item">
                        <div class="award-item">
                            <img class="partner" src="{{asset('frontend/assets/images/partnerlogo2.png')}}" alt="Image 0" />
                        </div>                        
                    </div>
                    <div class="item">
                        <div class="award-item">
                            <img class="partner" src="{{asset('frontend/assets/images/partnerlogo3.png')}}" alt="Image 0" />
                        </div>                        
                    </div>
                    <div class="item">
                        <div class="award-item">
                            <img class="partner" src="{{asset('frontend/assets/images/partnerlogo4.png')}}" alt="Image 0" />
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
@push('scripts')
<script>
        $("document").ready(function(){
            setTimeout(function(){
               $(".alert").hide();
            }, 5000 ); // 5 secs

        });
</script>
@endpush