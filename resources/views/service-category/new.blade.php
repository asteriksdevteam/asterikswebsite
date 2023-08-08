@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Create Service Category</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Create Category Form</h5>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ @$categories? route('service.category.update',['id'=>@$categories->id]) :  route('service.category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                @if(@$categories)
                                 @method('put')
                              @endif
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="mb-0" for="">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control outline-input mt-15" value="{{ @$categories->name }}" placeholder="Category Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="mb-0" for="">Image</label>
                                <input type="file" name="image" class="form-control outline-input mt-15 py-1">
                                 @if(@$categories)
                                <img class="w-25 mt-15" src="{{ asset('uploads/service-category') }}/{{ $categories->category_image }}">
                                @endif
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