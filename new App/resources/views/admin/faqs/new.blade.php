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
                <h5 class="hk-sec-title">Faq`s</h5>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ route('admin.faqs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="mb-0" for="">Title</label>
                                <input type="text" name="title" id="title" class="form-control outline-input mt-15" value="{{@$faqs[0]->title}}" placeholder="Category Name" required>
                            </div>
                            <div class="form-group m-form__group ">
                                <label class="col-lg-2 col-form-label">Description: *</label>
                                <div class="col-lg-12 form-group" >
                                    <textarea class="w-100 form-control ckeditor" id="ckeditor" rows="10" cols="20" name="decription" placeholder="Enter description" required>{{@$faqs[0]->Description}}</textarea>
                                    @error('decription')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @php
                                $count = 0;
                            @endphp
                            <div id="main-div">
                                @if(!empty($faqs[0]))
                                @foreach ($faqs as $key => $item)
                                <div id="{{$key+1}}">
                                <div class="col-md-12 form-group">
                                    <label class="mb-0" for="">Question</label>
                                    <input type="text" name="question[]" id="title" class="form-control outline-input mt-15" value="{{ @$item->question }}" placeholder="question" required>
                                </div>
                                <div class="form-group m-form__group ">
                                    <label class="col-lg-2 col-form-label">Answer: *</label>
                                    <div class="col-lg-12 form-group" >
                                        <textarea class="w-100 form-control" rows="6" cols="100" name="answer[]" placeholder="Enter Answer" required>{{ old('answer') ? old('answer') : @$item->answer }}</textarea>
                                        @error('answer')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="text-align:right;margin-right:65px"><a href="javascript:delIt('{{$key+1}}')"><i class="fa fa-trash text-danger"></i></a></div>
                            </div>
                                @php
                                    $count++;
                                @endphp
                                @endforeach
                                @else
                                <div class="col-md-12 form-group">
                                    <label class="mb-0" for="">Question</label>
                                    <input type="text" name="question[]" id="title" class="form-control outline-input mt-15" value="" placeholder="question" required>
                                </div>
                                <div class="form-group m-form__group ">
                                    <label class="col-lg-2 col-form-label">Answer: *</label>
                                    <div class="col-lg-12 form-group" >
                                        <textarea class="w-100 form-control" rows="6" cols="100" name="answer[]" placeholder="Enter Answer" required></textarea>
                                        @error('answer')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            <div class="col-md-12 float-right p-3">
                                <p id="addnew">
                                    <a href="javascript:new_link()">Add More Question <i class="fa fa-plus-circle pe-2"></i> </a>
                                </p>
                            </div>
                            
                            <div class="col-md-12 form-group">
                            <button class="btn btn-success float-right" type="submit">Submit form</button>
                        </div>
                        </div>
                    </form>
                    </div>
                    <div id="new-div" style="display: none">
                        <div class="col-md-12 form-group">
                            <label class="mb-0" for="">Question</label>
                            <input type="text" name="question[]" id="title" class="form-control outline-input mt-15" value="" placeholder="question" required>
                        </div>
                        <div class="form-group m-form__group ">
                            <label class="col-lg-2 col-form-label">Answer: *</label>
                            <div class="col-lg-12 form-group" >
                                <textarea class="w-100 form-control" rows="6" cols="100" name="answer[]" placeholder="Enter Answer" required></textarea>
                                @error('answer')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
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
<script>
    var ct = {{$count}};
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct +')"><i class="fa fa-trash text-danger"></i></a></div>';
	div1.innerHTML = document.getElementById('new-div').innerHTML + delLink;
	document.getElementById('main-div').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('main-div');
	parentEle.removeChild(ele);
}
</script>
@endpush