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
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Create Meta</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                {{-- <h5 class="hk-sec-title">Create Blog</h5> --}}
                <div class="row">
                    <div class="col-sm">
                        <form method="post" action="{{@$metas ? route('admin.meta.update',['id'=>$metas->id] ) : route('admin.meta.store') }}" class="" enctype="multipart/form-data">
                        @csrf
                        @if(@$metas)
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
                                    <label class="col-lg-2 col-form-label">Category:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control m-input page_id" name="page_slug" required>
                                            <option value="">Select Page</option>
                                         @foreach($pages as $cvalue)
                                            <option value="{{ $cvalue['slug'] }}" {{ $cvalue->slug == @$metas->page_slug ? 'Selected' : '' }}>{{ $cvalue['page_name'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Title: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control m-input meta_title" name="meta_title" placeholder="" value="{{@$metas ? @$metas->meta_title : ''}}" required>
                                    </div>
                                </div>
                                   <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Tags: *</label>
                                    <div class="col-lg-6">
                                        <input type="text" data-role="tagsinput" class="form-control m-input meta_tags" name="meta_tags" value="{{@$metas ? @$metas->meta_tags  : ''}}" required>
                                    </div>
                                </div>
                                   <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Meta Description: *</label>
                                    <div class="col-lg-6">
                                        <textarea type="text" class="form-control m-input meta_description" rows="10" name="meta_description" placeholder="Enter Meta Description"  required>{{@$metas ? @$metas->meta_description : ''}} </textarea>
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



$('.page_id').on('change',function(e){
    var  slug = $(this).val();
    var  tags = "";
    $('.meta_tags').val('');
    $('.meta_title').val('');
    $(".meta_tags").tagsinput('removeAll');
    $('.meta_description').text('');
    $.ajax({
        type :'GET',
        url : '{{ url('admin/meta/get-by-pageid') }}?slug='+slug,
        success:function(response)
        {
            tags = response.meta_tags;
            tagsSplit = tags.split(',');
            $.each(tagsSplit,function(k,v){
                $(".meta_tags").tagsinput('add',v);
            });
           $('.meta_title').val(response.meta_title);
           $('.meta_description').text(response.meta_description);
        }
    });

});
</script>
@endpush