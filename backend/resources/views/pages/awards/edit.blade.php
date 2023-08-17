@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Update</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">Update Awards</h5>
    <div class="row">
        <div class="col-sm">
            <form action="{{route('award.update',$awards->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Heading</label>
                    <input type="text" value="{{$awards->Heading}}" name="heading" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-12 form-group">
                    <label class="mb-0" for="">Description</label>
                    <textarea class="form-control mt-15" name="description" id="description" rows="3" placeholder="Slider Description">{{$awards->Description}}</textarea>
                </div>
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Image</label>
                    <input type="file" name="image" class="form-control outline-input mt-15 py-1">
                </div>
                <div class="col-md-6 form-group">
                    <img class="mx-25" src="{{asset($awards->Image)}}" width="200" alt="">
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