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
    <h5 class="hk-sec-title">Update Image Slider</h5>
    <div class="row">
        <div class="col-sm">
            <form action="{{route('slider.image.update',$sliderImg->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Select Slider</label>
                    <select name="imageid" class="form-control custom-select  mt-15">
                        <option selected="">Select</option>
                        @foreach($slider as $slider)
                        <option value="{{$slider->id}}" {{$slider->id == $sliderImg->imageId? 'selected':''}}>{{$slider->Name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Image Alt</label>
                    <input type="text" value="{{$sliderImg->imageAlt}}" name="alt" id="alt" class="form-control outline-input mt-15" placeholder="Slider Image Alt">
                </div>
                <div class="col-md-12 form-group">
                    <label class="mb-0" for="">Image</label>
                    <input type="file" name="image" class="form-control outline-input mt-15 py-1">
                </div>
                <div>
                    @php
                        $isImg = explode(".",$sliderImg->imagePath);
                        $isImg = $isImg[1];
                    @endphp
                    @if($isImg != 'mp4')
                    <img class="mx-25" src="{{asset($sliderImg->imagePath)}}" width="200" alt="{{$sliderImg->imageAlt}}">
                    @else
                    <video width="320" class="mx-25" height="240" controls>
                        <source src="{{asset($sliderImg->imagePath)}}" type="video/mp4">
                      </video>
                      @endif
                </div>
                <div class="col-md-12 form-group">
                <button class="btn btn-success float-right" type="submit">Update</button>
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