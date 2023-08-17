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
    <h5 class="hk-sec-title">What We Do Page</h5>
    {{-- <p class="mb-25">About Us</p> --}}
    <div class="row">
        <div class="col-sm">
            <form action="{{route('wwd.update',$wwd->id)}}" method="post" enctype="multipart/form-data">
                {{-- @method('put') --}}
                @csrf
                <input type="hidden" name="id" value="{{ $wwd->id }}">
            <div class="row">
                <div class="col-md-12 mt-15 text-center">  <h3>Main Heading Section</h3></div>
                <div class="col-md-12 mt-15">
                    <label><strong>Section Name</strong></label> 
                    <input type="text" class="form-control" value="{{ $wwd->Name }}" name="name" placeholder=""   >
                </div>
                 <div class="col-md-12 mt-15">
                     <label><strong>Main Heading</strong></label> 
                     <input type="text" class="form-control" value="{{ $wwd->Heading }}" name="heading" placeholder=""   >
                 </div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Main Descriptions</strong></label>                    
                    <textarea class="form-control"  name="description" rows="3" placeholder="" >{{ $wwd->Description }}</textarea>
                </div>
                <div class="col-md-12 mt-15 text-center">  <h3>Business Idea Planning</h3></div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Heading</strong></label> 
                    <input type="text" class="form-control" value="{{ $wwd->business_idea_heading }}" name="business_idea_heading" placeholder=""   >
                </div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Description</strong></label>                    
                    <textarea class="form-control"  name="business_idea_desc"  rows="3" placeholder="" >{{ $wwd->business_idea_desc }}</textarea>
                </div>
                <div class="col-md-9 mt-15">
                    <label class="mb-0" for=""><strong>Image</strong></label>
                    <input type="file" name="image_business" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-3 mt-15">
                    <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                    <img src="{{asset($wwd->business_idea_image)}}" alt="" width="150" height="80">
                </div>
                <div class="col-md-12 mt-15 text-center">  <h3>Finance Planning System</h3></div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Heading</strong></label> 
                    <input type="text" class="form-control" value="{{ $wwd->finance_planning_heading }}" name="finance_planning_heading" placeholder=""   >
                </div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Description</strong></label>                    
                    <textarea class="form-control"  name="finance_planning_desc"  rows="3" placeholder="" >{{ $wwd->finance_planning_desc }}</textarea>
                </div>
                <div class="col-md-9 mt-15">
                    <label class="mb-0" for=""><strong>Image</strong></label>
                    <input type="file" name="image_finance" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-3 mt-15">
                    <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                    <img src="{{asset($wwd->finance_planning_image)}}" alt="" width="150" height="80">
                </div>
                <div class="col-md-12 mt-15 text-center">  <h3>Development Website & App</h3></div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Heading</strong></label> 
                    <input type="text" class="form-control" value="{{ $wwd->develop_web_heading }}" name="develop_web_heading" placeholder=""   >
                </div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Description</strong></label>                    
                    <textarea class="form-control"  name="develop_web_desc"  rows="3" placeholder="" >{{ $wwd->develop_web_desc }}</textarea>
                </div>
                <div class="col-md-9 mt-15">
                    <label class="mb-0" for=""><strong>Image</strong></label>
                    <input type="file" name="image_develop" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-3 mt-15">
                    <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                    <img src="{{asset($wwd->develop_web_image)}}" alt="" width="150" height="80">
                </div>
                <div class="col-md-12 mt-15 text-center">  <h3>Market Analysis Project</h3></div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Heading</strong></label> 
                    <input type="text" class="form-control" value="{{ $wwd->market_analysis_heading }}" name="market_analysis_heading" placeholder=""   >
                </div>
                 <div class="col-md-12 mt-15">
                    <label><strong>Description</strong></label>                    
                    <textarea class="form-control"  name="market_analysis_desc"  rows="3" placeholder="" >{{ $wwd->market_analysis_desc }}</textarea>
                </div>
                <div class="col-md-9 mt-15">
                    <label class="mb-0" for=""><strong>Image</strong></label>
                    <input type="file" name="image_market" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-3 mt-15">
                    <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                    <img src="{{asset($wwd->market_analysis_image)}}" alt="" width="150" height="80">
                </div>
                <div class="col-md-12 mt-35 text-lg-right">
                 <button class="btn btn-primary" name="submit_form" type="submit">Submit form</button>
              </div>
            </div>
          </form>
        </div>
    </div>
     </section>
        </div>
    </div>
</div>
@endsection