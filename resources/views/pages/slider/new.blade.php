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
            <h5 class="hk-sec-title">Create Slider Form</h5>
            <div class="row">
                <div class="col-sm">
                    <form action="{{route('slider.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for=""></label>
                            <input type="text" name="name" id="name" class="form-control outline-input mt-15" placeholder="Slider Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="heading" id="heading" class="form-control outline-input mt-15" placeholder="Slider Heading">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <input type="text" name="metatitle"class="form-control outline-input mt-15" placeholder="Meta Title">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Status</label>
                            <div class="d-flex">
                            <input type="radio" value="1" checked class="mx-1" name="status"> Enable
                            <input type="radio" value="0" class="mx-1" name="status"> Disable
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control mt-15" name="description" id="description" rows="3" placeholder="Slider Description"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                        <button class="btn btn-success float-right" type="submit">Submit form</button>
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