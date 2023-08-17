@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Home</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-12">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                    <div class="col-sm">
                        <h4>Select Images</h4>
                        <hr>
                        <form action="{{route('slider.image.store.slider',$slider->id)}}" method="post" class="text-center" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                        <div class="col-md-8 mt-15">
                            <input type="file" name="image_slider[]" class="form-control-file form-control py-1" multiple>
                        </div>
                        <div class="col-md-4 mt-15">
                            <button class="btn btn-primary" type="submit">Upload Image</button>
                         </div>
                        </div>
                    </form>
                        <br>
                        <div class="row">
                            <div class="col-md-12 mt-15">
                                <h3>{{$slider->Name}} ( Slider )</h3><hr>
                            </div>
                        </div>
                        <div class="row">
                            @if($slider->sliderImages)
                                @foreach ($slider->sliderImages as $image)
                            <div class="col-md-6 mt-15">

                                            <div class="media p-5">
                                                @php
                                                $isImg = explode(".",$image->imagePath);
                                                $isImg = $isImg[1];
                                            @endphp
                                            @if($isImg != 'mp4')
                                            <img src="{{asset($image->imagePath)}}" class="align-self-center mr-3 border w-img-280 w-75" height="180">
                                            @else
                                            <video width="320" class="mx-25" height="240" controls>
                                                <source src="{{asset($image->imagePath)}}" type="video/mp4">
                                              </video>
                                              @endif
                                                <form action="{{route('slider.image.delete.slider',$image->id)}}" method="post" class="text-center" >
                                                @csrf
                                                <button type="submit" class="position-absolute bg-orange text-white py-1 px-3 border slider-img" onclick="return confirm('Are you sure?')">&times;</button>
                                            </form>
                                                {{-- <div class="media-body">
                                                  <form action="{{route('slider.image.store.slider',$slider->id)}}" method="post" class="text-center" >
                                                    @csrf
                                                    <label for="">Image Alt</label>
                                                    <input type="text" name="imageAlt" class="form-control-file form-control" value="{{$image->imageAlt}}">
                                                    <button type="submit" class="btn bg-orange text-white mt-3">Submit</button>
                                                  </form>
                                                </div> --}}
                                              </div>
                                            </div>
                                @endforeach
                                @else
                                <div class="col-md-12 mt-15">
                                    <h3>No Image Found</h3>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
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