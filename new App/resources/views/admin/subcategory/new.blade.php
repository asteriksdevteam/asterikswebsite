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
                <h5 class="hk-sec-title">Create Category Form</h5>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ @$subcategories? route('admin.service.subcategory.update',['id'=>@$subcategories->id]) :  route('service.subcategory.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                @if(@$subcategories)
                                 @method('put')
                              @endif
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="mb-0" for="">Select Category</label>
                                <select name="category_id" class="form-control custom-select  mt-15" required>
                                    <option selected="">Select</option>
                                    @foreach($categories as $category)
                                    <option   value="{{$category->id}}" {{$category->id == @$subcategories->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="mb-0" for="">Sub Category Name</label>
                                <input type="text" name="name" id="name" class="form-control outline-input mt-15" value="{{ @$subcategories->name }}" placeholder="Category Name" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="mb-0" for="">Image</label>
                                <input type="file" name="image" class="form-control outline-input mt-15 py-1" >
                                 @if(@$subcategories)
                                <img class="w-25 mt-15" src="{{ asset('uploads/subcategory') }}/{{ @$subcategories->imagePath }}">
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