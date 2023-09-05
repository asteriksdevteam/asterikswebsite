@extends('admin.layouts.app')

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
    <h5 class="hk-sec-title">About Us Page</h5>
    {{-- <p class="mb-25">About Us</p> --}}
    <div class="row">
        <div class="col-sm">
            <form action="{{ route('admin.about-us.update',['id'=> $aboutus['id']??1]) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{ @$aboutus['id'] }}">
            <div class="row">
                <div class="col-md-12 mt-15 text-center">  <h3>Silder Content</h3></div>
                 <div class="col-md-12 mt-15">
                     <label><strong>Sldier Header Content</strong></label> 
                     <input type="text" class="form-control" value="{{ @$aboutus['slider_heading'] }}" name="slider_heading" placeholder=""   required>
                 </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Sldier Content</strong></label>                    
                    <textarea class="form-control"  name="slider_heading_content" id="exampleFormControlTextarea1" rows="3" placeholder="" required>{{ @$aboutus['slider_heading_content'] }}</textarea>
                </div>
               <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Our Story</h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Our Story Heading</strong></label> 
                     <input type="text" class="form-control " value="{{ @$aboutus['our_story_heading'] }}" name="our_story_heading" placeholder=""  required>
                 </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Our Story</strong></label>                    
                    <textarea class="form-control " name="our_story" id="exampleFormControlTextarea1" rows="3" placeholder="Sldier Content" >{{ @$aboutus['our_story'] }}</textarea>
                </div>
                <div class="col-md-12 mt-15">
                     <label><strong>Our Story Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{ asset(@$aboutus['our_story_image']) }}" name="our_story_image" placeholder=""  >
                     <img src="{{ asset(@$aboutus['our_story_image']) }}" class="mt-25 w-25" onerror="this.src='{{asset('images/no_img.png')}}'">
                </div>
               <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Company Profile</h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Company Profile Heading</strong></label> 
                     <input type="text" class="form-control" value="{{ @$aboutus['company_profile_heading'] }}"  name="company_profile_heading" placeholder=""  required>
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Company Profile</strong></label>                    
                    <textarea class="form-control " name="company_profile" id="exampleFormControlTextarea1" rows="3" placeholder="Sldier Content" required> {{ @$aboutus['company_profile'] }}</textarea>
                </div>
                 <div class="col-md-12 mt-15">
                     <label><strong> Company Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{ asset(@$aboutus['our_company_image']) }}" name="our_company_image" placeholder=""  >
                     <img src="{{ asset(@$aboutus['our_company_image']) }}" class="mt-25 w-25" onerror="this.src='{{asset('images/no_img.png')}}'">
                </div>
            <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Mission Statment</h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Mission Statment Heading</strong></label> 
                     <input type="text" class="form-control" value="{{ @$aboutus['mission_statment_heading'] }}" name="mission_statment_heading" placeholder=""  required>
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Mission Statment</strong></label>                    
                    <textarea class="form-control " name="mission_statment" id="exampleFormControlTextarea1" rows="3" placeholder=""  required>{{ @$aboutus['mission_statment'] }}</textarea>
                </div>
                <div class="col-md-12 mt-15">
                     <label><strong> Mission Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{ @$aboutus['mission_image'] }}" name="mission_image" placeholder=""  >
                     <img src="{{ asset( @$aboutus['mission_image']) }}" class="mt-25 w-25" onerror="this.src='{{asset('images/no_img.png')}}'">
                </div>
                <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Vision Statment</h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Vision Statment Heading</strong></label> 
                     <input type="text" class="form-control" value="{{ @$aboutus['Vision_statment_heading'] }}" required name="Vision_statment_heading" placeholder=""  >
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Vision Statment</strong></label>                    
                    <textarea class="form-control "  name="Vision_statment" id="exampleFormControlTextarea1" rows="3" required placeholder="" >{{ @$aboutus['Vision_statment'] }}</textarea>
                </div>
                  <div class="col-md-12 mt-15">
                     <label><strong> Vision Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{  asset(@$aboutus['vision_image']) }}" name="vision_image" placeholder=""  >
                     <img src="{{ asset(@$aboutus['vision_image'] ) }}" class="mt-25 w-25" onerror="this.src='{{asset('images/no_img.png')}}'">
                </div>
                <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Counter </h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Project Complete</strong></label> 
                     <input type="text" class="form-control" name="project_complete" value="{{ @$aboutus['project_complete'] }}" required placeholder=""  >
                </div>
                  <div class="col-md-12 mt-15">
                     <label><strong>Happy Customer</strong></label> 
                     <input type="text" class="form-control" name="happy_customer" value="{{ @$aboutus['happy_customer'] }}" required placeholder=" "  >
                </div>
                  <div class="col-md-12 mt-15">
                     <label><strong>Year Experiences</strong></label> 
                     <input type="text" class="form-control" name="year_experience" value="{{ @$aboutus['year_experience'] }}" placeholder=" "  >
                </div>
                  <div class="col-md-12 mt-15">
                     <label><strong>Award Achievement</strong></label> 
                     <input type="text" class="form-control" name="award_achievement" value="{{ @$aboutus['award_achievement'] }}" required placeholder=" "  >
                </div>
                
                <div class="col-md-12 mt-15 text-center"> <h3>Work With us </h3></div>
               <div class="col-md-12 mt-15">
                     <label><strong>Upload Image</strong></label> 
                     <input type="file" class="form-control" value="{{ asset(@$aboutus['work_image']) }}" name="work_image" placeholder=""  >
                     <img src="{{ asset(@$aboutus['work_image']) }}" class="mt-25 w-25" onerror="this.src='{{asset('images/no_img.png')}}'">
                </div>
                 
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