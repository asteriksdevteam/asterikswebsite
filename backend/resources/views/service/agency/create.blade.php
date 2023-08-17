@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Agency Create</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">Create New Category</h5>
    <div class="row">
        <div class="col-sm">
            <form action="{{route('agencys.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Select Category</label>
                    <select name="category_id" class="form-control custom-select  mt-15">
                        <option>Select</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label class="mb-0" for="">Name</label>
                    <input type="text" value="" name="name" class="form-control outline-input mt-15 py-1">
                </div>
                
                <div class="col-md-12 form-group">
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