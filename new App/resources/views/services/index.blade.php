@extends('frontend.layouts.app')
@section('frontendcontent')

<section class="servicebanner-section">
    <div class="container containercenter">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-6 col-xs-12 my-auto">
                <div class="servicebanner-content">
                    <h1 class="bannerheading">{{@$getServices['main_heading']}}</h1>
                    <p>{{@$getServices['main_desc']}}</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="form" >
                   
                    <h3 class="subtitle">Lets start a project together</h3>
                    <p>We make all your dreams come true in a successful project.</p>
                    <form action="{{route('postServicesData')}}" method="post">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name*" name="name" class="form-control" required />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email*" name="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="row mt-3 gx-3">
                            <div class="col-lg-6">
                                <input type="text" placeholder="phone*" name="phone_number" class="form-control" required />
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select form-control" name="subject">
                                    <option>frontend</option>
                                    <option>backtend</option>
                                    <option>html</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" class="mt-3">
                            <textarea rows="7" name="message" class="form-control" placeholder="summary"></textarea>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <button type="submit" class="orangebtn">submit</button>
                        </div>
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

<section class="development-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="title">{{@$getServices['service_heading']}}</h2>
                <p class="desc">
                    {{@$getServices['service_desc']}}
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <img src="{{asset(@$getServices['box1_image'])}}" class="dev1" alt="" />
                    <h3 class="subtitle">{{@$getServices['box1_heading']}}</h3>
                    <p>{{@$getServices['box1_desc']}}</p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset(@$getServices['box2_image'])}}" class="dev1" alt="" />
                    <h3 class="subtitle">{{@$getServices['box2_heading']}}</h3>
                    <p>{{@$getServices['box2_desc']}}</p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset(@$getServices['box3_image'])}}" class="dev1" alt="" />
                    <h3 class="subtitle">{{@$getServices['box3_heading']}}</h3>
                    <p>{{@$getServices['box3_desc']}}</p>
                </div>
            </div>
            @if(@$getServices['box4_heading'])
            <div class="col">
                <div class="card">
                    <img src="{{asset(@$getServices['box4_image'])}}" class="dev1" alt="" />
                    <h3 class="subtitle">{{@$getServices['box4_heading']}}</h3>
                    <p>{{@$getServices['box4_desc']}}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="servicetype-section">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <img src="{{asset(@$getServices['tab1_image'])}}" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div className='pinkbanner-content m20'>
                   <div class="servicetype-right">
                        <h2 className='title'>{{@$getServices['agency_heading']}}</h2>
                        <p>{{@$getServices['agency_desc']}}</p>
                   </div>
                </div>
                <ul class="servicetype-tabs nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="{{str_replace(' ','_',@$getServices['tab1'])}}-tab" data-bs-toggle="tab" data-bs-target="#{{str_replace(' ','_',@$getServices['tab1'])}}-tab-pane" type="button" role="tab" aria-controls="{{str_replace(' ','_',@$getServices['tab1'])}}-tab-pane" aria-selected="true">{{@$getServices['tab1']}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="{{str_replace(' ','_',@$getServices['tab2'])}}-tab" data-bs-toggle="tab" data-bs-target="#{{str_replace(' ','_',@$getServices['tab2'])}}-tab-pane" type="button" role="tab" aria-controls="{{str_replace(' ','_',@$getServices['tab2'])}}-tab-pane" aria-selected="false">{{@$getServices['tab2']}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="{{str_replace(' ','_',@$getServices['tab3'])}}-tab" data-bs-toggle="tab" data-bs-target="#{{str_replace(' ','_',@$getServices['tab3'])}}-tab-pane" type="button" role="tab" aria-controls="{{str_replace(' ','_',@$getServices['tab3'])}}-tab-pane" aria-selected="false">{{@$getServices['tab3']}}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="{{str_replace(' ','_',@$getServices['tab4'])}}-tab" data-bs-toggle="tab" data-bs-target="#{{str_replace(' ','_',@$getServices['tab4'])}}-tab-pane" type="button" role="tab" aria-controls="{{str_replace(' ','_',@$getServices['tab4'])}}-tab-pane" aria-selected="false">{{@$getServices['tab4']}}</button>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="{{str_replace(' ','_',@$getServices['tab1'])}}-tab-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','_',@$getServices['tab1'])}}-tab" tabindex="0">
                        <h2 className='title'>{{@$getServices['tab1_heading']}}</h2>
                        <p>{{@$getServices['tab1_desc']}}</p>
                    </div>
                    <div class="tab-pane fade" id="{{str_replace(' ','_',@$getServices['tab2'])}}-tab-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','_',@$getServices['tab2'])}}-tab" tabindex="0">
                        <h2 className='title'>{{@$getServices['tab2_heading']}}</h2>
                        <p>{{@$getServices['tab2_desc']}}</p>
                    </div>
                    <div class="tab-pane fade" id="{{str_replace(' ','_',@$getServices['tab3'])}}-tab-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','_',@$getServices['tab3'])}}-tab" tabindex="0">
                        <h2 className='title'>{{@$getServices['tab3_heading']}}</h2>
                        <p>{{@$getServices['tab3_desc']}}</p>
                    </div>
                    <div class="tab-pane fade" id="{{str_replace(' ','_',@$getServices['tab4'])}}-tab-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','_',@$getServices['tab4'])}}-tab" tabindex="0">
                        <h2 className='title'>{{@$getServices['tab4_heading']}}</h2>
                        <p>{{@$getServices['tab4_desc']}}</p>
                    </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class='ourwork-section'>
    <div class="container">
        <div class='row justify-content-center text-center'>
            <div class="col-lg-9 col-md-9">
                <h2 class='title'>{{@$getServices['portfolio_heading']}}</h2>
                <h3 class='subtitle3'>{{@$getServices['sub_heading_chooseservices']}}</h3>
                <p class='desc'>{{@$getServices['portfolio_desc']}}</p>
            </div>
        </div>
        <div class='row mt-4 align-items-center'>
            <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
            <img src="{{asset(@$getServices['portfolio_logo'])}}" className='smalllogo' alt="" />
            {{-- <p class='smalltitle'>{{@$getServices['portfolio_logo']}}</p> --}}
            <h2 class='title'>{{@$getServices['company_heading']}}</h2>
            <p>{{@$getServices['company_desc']}}</p>
            </div>
        </div>
    </div>
</section>

<section class="whychoose-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <h2 class="title">{{@$getServices['choose_heading']}}</h2>
                <p>
                    {{@$getServices['choose_desc']}}
                </p>
            </div>
        <div>
            <img src="{{asset(@$getServices['choose_image'])}}" alt="" />
        </div>
    </div>
</section>

<section class='ourprocess-section'>
    <div class="container">
        <div class='row justify-content-center text-center'>
            <div class="col-lg-9">
                <h2 class='title'>{{@$getServices['process_heading']}}</h2>
                <h3 class='subtitle2 mb-4'> {{@$getServices['sub_heading_ourprocess']}}</h3>
                <p>{{@$getServices['process_desc']}}</p>
            </div>
        </div>
        <div class='row pt-4 mt-5'>
            <div class="col-lg-4 col-md-4">
                <div class='processbox'>
                    <div class='numberbox'>
                        <h1>01</h1>
                    </div>
                    <ul class='processlist'>
                    <h3 class='subtitle'>{{@$getServices['p1_heading']}}</h3>
                           {!!@$getServices['p1_desc']!!}
                    {{-- <li> Business analysis</li>
                        <li>Documenting specifications</li>
                        <li>Preparing wireframes</li>
                        <li>Getting client approval</li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class='processbox'>
                    <div class='numberbox'>
                        <h1>02</h1>
                    </div>
                    <ul class='processlist'>
                    <h3 class='subtitle'>{{@$getServices['p2_heading']}}</h3>
                        {!!@$getServices['p2_desc']!!}
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class='processbox processboxlast'>
                    <div class='numberbox'>
                        <h1>03</h1>
                    </div>
                    <ul class='processlist'>
                    <h3 class='subtitle'> {{@$getServices['p3_heading']}}</h3>
                        {!!@$getServices['p3_desc']!!}
                        {{-- <li>Development strategy</li>
                        <li>Testing strategy</li>
                        <li>Product development</li>
                        <li>Product release</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  

<section class="contactsection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-lg-4 offset-md-4">
                <div class="form" >
                    
                    <h3 class="subtitle">apply for an opening position now</h3>
                    <form method="post" action="{{route('postInterviewData')}}">
                        @csrf
                        <div class="gx-3 row">
                            <div class="col-lg-6"><input placeholder="Name*" name="name" class="form-control" required="" type="text" /></div>
                            <div class="col-lg-6"><input placeholder="Email*" name="email" class="form-control" required="" type="text" /></div>
                        </div>
                        <div class="gx-3 row">
                            <div class="col-lg-6">
                                {{-- <input placeholder="phone*" name="" class="form-control" required="" type="text" /> --}}
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select form-control" name="position">
                                    <option disabled="">select position</option>
                                    <option>frontend</option>
                                    <option>backtend</option>
                                    <option>html</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12"><textarea rows="7" name="message" class="form-control" placeholder="summary"></textarea></div>
                        <div class="mt-3 justify-content-center row">
                            <button type="submit" name="submit" class="orangebtn">submit</button>
                        </div>
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

@endsection
@push('scripts')


@endpush