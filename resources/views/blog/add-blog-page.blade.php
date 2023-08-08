@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Create</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">Blog Page</h5>
    {{-- <p class="mb-25">About Us</p> --}}
    <div class="row">
        <div class="col-sm">
            <form action="{{ route('blog-page.update',['id'=> @$blogPage['id']]) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{ @$blogPage['id'] }}">
            <div class="row">
                <div class="col-md-12 mt-15 text-center">  <h3>Silder Content</h3></div>
                 <div class="col-md-12 mt-15">
                     <label><strong>Sldier Header Content</strong></label> 
                     <input type="text" class="form-control" value="{{ @$blogPage['slider_heading'] }}" name="slider_heading" placeholder=""   >
                 </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Sldier Content</strong></label>                    
                    <textarea class="form-control"  name="slider_heading_content" id="exampleFormControlTextarea1" rows="3" placeholder="" >{{ @$blogPage['slider_heading_content'] }}</textarea>
                </div>

                <div class="col-md-12 mt-15">
                     <label><strong>Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{ $blogPage['work_image'] }}" name="work_image" placeholder=""  >
                     <img src="{{ asset('uploads/blogpage/') }}/{{ $blogPage['work_image'] }}" class="mt-25 w-25">
                </div>
                 
               <div class="col-md-12 mt-15"> <hr></div>
               
                          
                <div class="col-md-12 mt-35 text-lg-right">
                 <button class="btn btn-primary" name="submit_form" type="submit">Submit form</button>
              </div>
           
            </div>
          </form>
        </div>
     </section>
        </div>
    </div>
</div>
@endsection