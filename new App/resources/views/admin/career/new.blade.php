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
    <h5 class="hk-sec-title">Career Page</h5>
    {{-- <p class="mb-25">About Us</p> --}}
    <div class="row">
        <div class="col-sm">
            <form action="{{ route('admin.career.update',['id'=> @$career['id']??1]) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{ @$career['id']??1 }}">
            <div class="row">
                <div class="col-md-12 mt-15 text-center">  <h3>Silder Content</h3></div>
                 <div class="col-md-12 mt-15">
                     <label><strong>Sldier Header Content</strong></label> 
                     <input type="text" class="form-control" value="{{ @$career['slider_heading'] }}" name="slider_heading" placeholder=""  required >
                 </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Sldier Content</strong></label>                    
                    <textarea class="form-control"  name="slider_heading_content" id="exampleFormControlTextarea1" rows="3" placeholder="" required>{{ @$career['slider_heading_content'] }}</textarea>
                </div>
               <div class="col-md-12 mt-15"> <hr></div>
               <div class="col-md-12 mt-15 text-center"> <h3>Our Recruitment Process</h3></div>
              
                <div class="col-md-12 mt-15">
                    <label><strong>Apply</strong></label>                    
                    <textarea class="form-control " name="apply" id="exampleFormControlTextarea1" rows="3" placeholder="" required>{{ @$career['apply'] }}</textarea>
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Review</strong></label>                    
                    <textarea class="form-control " name="review" id="exampleFormControlTextarea1" rows="3" placeholder="" required>{{ @$career['review'] }}</textarea>
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Interviews</strong></label>                    
                    <textarea class="form-control " name="interviews" id="exampleFormControlTextarea1" rows="3" placeholder="" >{{ @$career['interviews'] }}</textarea>
                </div>
                <div class="col-md-12 mt-15">
                    <label><strong>Onboarding</strong></label>                    
                    <textarea class="form-control " name="onboarding" id="exampleFormControlTextarea1" rows="3" placeholder="" required>{{ @$career['onboarding'] }}</textarea>
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