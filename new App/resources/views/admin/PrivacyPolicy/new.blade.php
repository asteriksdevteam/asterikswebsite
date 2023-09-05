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
                <h5 class="hk-sec-title">Privacy Policy</h5>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ route('admin.privacy-policy.update',['id'=> @$privacyPolicy['id']??1]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="mb-0" for="">Title</label>
                                <input type="text" name="title" id="title" class="form-control outline-input mt-15" value="{{ @$privacyPolicy->title }}" placeholder="Category Name" required>
                            </div>
                            <div class="form-group m-form__group ">
                                <label class="col-lg-2 col-form-label">Description: *</label>
                                <div class="col-lg-12 form-group" >
                                    <textarea class="w-100 form-control ckeditor" id="ckeditor" rows="10" cols="20" name="Description" placeholder="Enter blog short_description" required>{{ old('Description') ? old('Description') : @$privacyPolicy->Description }}</textarea>
                                    @error('Description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-12 form-group">
                                <label class="mb-0" for="">Image</label>
                                <input type="file" name="image" class="form-control outline-input mt-15 py-1">
                                 @if(@$categories)
                                <img class="w-25 mt-15" src="{{ asset('uploads/category') }}/{{ $categories->category_image }}" onerror="this.src='{{asset('images/no_img.png')}}'">
                                @endif
                            </div> --}}
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
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>

<script>
CKEDITOR.replace( '#ckeditor', {
  extraPlugins: 'imageuploader'
});
</script>
@endpush