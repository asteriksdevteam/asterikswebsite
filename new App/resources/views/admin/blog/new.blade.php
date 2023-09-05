@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
<style type="text/css">
    .bootstrap-tagsinput{
            width: 100%;
        }
          .label-info{
            background-color: #17a2b8;

        }
        .label {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,
            border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
</style>
<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Create Blog</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                {{-- <h5 class="hk-sec-title">Create Blog</h5> --}}
                <div class="row">
                
                    <div class="col-sm">
                        <form method="post" action="{{@$blog ? route('admin.blog.update',['id'=>$blog->id] ) : route('admin.blog.store') }}" class="" enctype="multipart/form-data">
                        @csrf
                        @if(@$blog)
                            @method('put')
                        @endif
                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                   <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Title: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control m-input" name="meta_title" placeholder="" value="{{@$blog ? @$blog->meta_title : ''}}" required>
                                    </div>
                                </div>
                                   <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Tags: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" data-role="tagsinput" class="form-control m-input" name="meta_tags" placeholder="Meta Tags" value="{{@$blog ? @$blog->meta_tags  : ''}}" required>
                                    </div>
                                </div>
                                   <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Description: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control m-input" name="meta_description" placeholder="Enter Meta Description" value="{{@$blog ? @$blog->meta_description : ''}}" required>
                                    </div>
                                </div>
                            <div class="col-md-12 mt-15"> <hr></div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Name: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control m-input" name="name" placeholder="Enter Blog name" value="{{@$blog ? @$blog->name : ''}}" required>
                                    </div>
                                </div>
                                @if(@$blog)
                                 <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Slug: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control m-input" name="slug" placeholder="" value="{{ str_replace('admin','blog/',url('/')) }}{{@$blog ? @$blog->slug : ''}}" readonly>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Category:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control m-input" name="category_id" required>
                                         @foreach($categories as $cvalue)
                                            <option value="{{ $cvalue['id'] }}" {{ $cvalue->id == @$blog->category_id ? 'Selected' : '' }}>{{ $cvalue['name'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Image: *</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control m-input" name="image">
                                        @if(@$blog)
                                            <img src="{{ asset($blog->image) }}" width="100" onerror="this.src='{{asset('images/no_img.png')}}'">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Thumb: *</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control m-input" name="thumb">
                                        @if(@$blog)
                                            <img src="{{ asset($blog->thumb) }}" width="100" onerror="this.src='{{asset('images/no_img.png')}}'">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Short Description: *</label>
                                    <div class="col-lg-6">
                                        <textarea class="w-100 form-control ckeditor" id="ckeditor" rows="10" cols="20" name="short_description" placeholder="Enter blog short_description" required>{{ old('short_description') ? old('short_description') : @$blog->short_description }}</textarea>
                                        @error('short_description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Blog Description: *</label>
                                    <div class="col-lg-6">
                                        <textarea class="w-100 form-control ckeditor" id="ckeditor" rows="10" name="description" placeholder="Enter blog description" required >{{ old('description') ? old('description') : @$blog->description }}</textarea>
                                        @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                               
                                <div class="m-form__group form-group row">
                                    <label class="col-lg-2 col-form-label">Status:</label>
                                    <div class="col-lg-6">
                                        <div class="m-radio-list">
                                            <label class="m-radio">
                                                <input type="radio" value="1" name="status" {{@$blog->status == 1 ? 'checked' : ''}}> enable
                                                <span></span>
                                            </label>
                                            <label class="m-radio">
                                                <input type="radio" value="0" name="status" {{@$blog->status == 0 ? 'checked' : ''}}> disable
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
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
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>

<script>
CKEDITOR.replace( '#ckeditor', {
  extraPlugins: 'imageuploader'
});
</script>
@endpush