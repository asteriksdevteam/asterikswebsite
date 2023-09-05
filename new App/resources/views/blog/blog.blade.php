@extends('frontend.layouts.app')
@section('frontendcontent')

<section class='blogbanner'>
    <div class='container containercenter'>
        <div class="row">
            <div class="col-lg-12">
                <div class='blogcontent'>
                    <h1 class='bannerheading'>{{$getBlogPage['slider_heading']}}</h1>
                    <p class='bannertext'>{{$getBlogPage['slider_heading_content']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blogtabs-section">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs blogtabs" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                </li>  
                @foreach ($getCategory as $key =>  $gvalue)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " id="{{strtolower(str_replace(' ','_',$gvalue['name']))}}-tab" data-bs-toggle="tab" href="#{{strtolower(str_replace(' ','_',$gvalue['name']))}}" role="tab" aria-controls="{{strtolower(str_replace(' ','_',$gvalue['name']))}}" aria-selected="{{$key == 0 ? 'true' : 'false'}}">{{$gvalue['name']}}</a>
                    </li>  
                @endforeach
                
                {{-- <li class="nav-item" role="presentation">
                    <a class="nav-link" id="blog-tab" data-bs-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="false">Blog</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="business-tab" data-bs-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false">Business</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="mobile-tab" data-bs-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">Mobile</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Product</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="machine-tab" data-bs-toggle="tab" href="#machine" role="tab" aria-controls="machine" aria-selected="false">Machine</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="learning-tab" data-bs-toggle="tab" href="#learning" role="tab" aria-controls="learning" aria-selected="false">Learning</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="management-tab" data-bs-toggle="tab" href="#management" role="tab" aria-controls="management" aria-selected="false">Management</a>
                </li> --}}
            </ul>
            <div class="tab-content" id="myTabContent">
              
                @foreach ($getCategory  as $bkey => $getBlogscat)
                <div class="tab-pane fade {{$bkey == 0 ? 'show active' : ''}}" id="{{strtolower(str_replace(' ','_',$getBlogscat['name']))}}" role="tabpanel" aria-labelledby="{{strtolower(str_replace(' ','_',$getBlogscat['name']))}}-tab">
                    <div class="row">
                        {{-- @dd(collect($getBlogs)->where('category_id',$getBlogs['category_id']),$getBlogs['category_id'],collect($getBlogs)) --}}
                        @foreach (collect($getBlog)->where('category_id',$getBlogscat['id']) as $key => $tech)
                        <div class="col-lg-4 col-md-6">
                            <div class='card blogcard'>
                                <img src='{{asset($tech['thumb'])}}'  alt='' />
                                <div class='blogcard-body'>
                                    <p>{{$getBlogscat['name']}} {{date('d-M-Y',strtotime($tech['created_at']))}}</p>
                                    <h3 class='subtitle'>{!! $tech['name']!!}</h3>
                                    <a href='{{route('blog-detail',['slug'=>$tech['slug']])}}'>read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-4 justify-content-center text-center">
            <div class="dlink"><a class="orangebtn blogbtn" href="#">submit</a></div>
        </div>
    </div>
</section>
@endsection
@push('scripts')


@endpush