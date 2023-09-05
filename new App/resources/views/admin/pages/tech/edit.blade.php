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
    <h5 class="hk-sec-title">Update Slider Form</h5>
    <div class="row">
        <div class="col-sm">
            <form action="{{route('admim.tech.update',$tech->id)}}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-6 mt-15">
                    <label   for="">Name</label>
                    <input type="text" value="{{$tech->Name}}" name="name" id="name" class="form-control outline-input mt-15" placeholder="Tech Name" required>
                </div>
                <div class="col-md-6 mt-15">
                    <label>Category</label> 
                    <select name="category_id" id="category_id" class="form-control custom-select  mt-15" required>
                       <option value="">Select</option>
                       @foreach($categories as $category)
                       <option   value="{{$category->id}}" {{$tech->category_id == $category->id ? 'selected' : ''}}>{{$category->Name}}</option>
                       @endforeach
                    </select>
                 </div>
                <div class="col-md-12 form-group mt-15">
                <button class="btn btn-success float-right" type="submit">Submit</button>
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