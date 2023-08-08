@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="container">
   <!-- Title -->
   <div class="hk-pg-header">
      <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Create/Update</h4>
   </div>
   <!-- /Title -->
   <!-- Row -->
   <div class="row">
      
      <div class="col-xl-12">
         <section class="hk-sec-wrapper">
               @if (\Session::has('success'))
                   <div class="alert alert-success">
                       <ul>
                           <li>{!! \Session::get('success') !!}</li>
                       </ul>
                   </div>
               @endif
            <h5 class="hk-sec-title">Services</h5>
            <form action="{{route('get-data')}}" method="get" enctype="multipart/form-data">
               {{-- @method('put') --}}
               @csrf
               <div class="row">
                  <div class="col-sm">
                     <div class="row">
                        <div class="col-md-6 mt-15">
                           <label><strong>Category</strong></label> 
                           <select name="category" id="category" class="form-control custom-select  mt-15" required>
                              <option value="">Select</option>
                              @foreach($categories as $category)
                              <option   value="{{$category->id}}" {{$category->id == @$cateId ? 'selected': ''}}>{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-md-6 mt-15">
                           <label><strong>Sub Category</strong></label> 
                           <select name="subcategory" id="subcategory" class="form-control custom-select  mt-15" required>
                              <option value="">Select</option>
                              @foreach($subcategories as $category)
                              <option   value="{{$category->id}}" {{$category->id == @$subcateId ? 'selected': ''}}>{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-md-12 mt-35 text-lg-right">
                           <button class="btn btn-primary" name="submit_form" type="submit">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            @if($isService)
            <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
               {{-- @method('put') --}}
               @csrf
               <div class="row">
                  <div class="col-sm">
                     <input type="hidden" name="service_id" value="{{ @$services->id }}">
                     <input type="hidden" name="cateId" value="{{ @$cateId }}">
                     <input type="hidden" name="subcateId" value="{{ @$subcateId }}">
                     <div class="row">
                        <div class="col-md-12 mt-15 text-center">
                           <h3>Main Heading Section (SEO) </h3>
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Main Heading</strong></label> 
                           <input type="text" class="form-control" value="{{ @$services->main_heading }}" name="mainheading" placeholder=""   >
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Main Descriptions</strong></label>                    
                           <textarea class="form-control"  name="maindescription" rows="3" placeholder="" >{{ @$services->main_desc }}</textarea>
                        </div>
                        <div class="col-md-9 mt-15">
                            <label class="mb-0" for=""><strong>Image</strong></label>
                            <input type="file" name="header_image" class="form-control outline-input mt-15 py-1">
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->header_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                        <div class="col-md-12 mt-15 text-center">
                           <h3>Services</h3>
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Heading</strong></label> 
                           <input type="text" class="form-control" value="{{ @$services->service_heading }}" name="serviceheading" placeholder=""   >
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Description</strong></label>                    
                           <textarea class="form-control"  name="servicedesc"  rows="3" placeholder="" >{{ @$services->service_desc }}</textarea>
                        </div>
                        <div class="col-md-12 mt-15 text-left">
                            <h3>Box 1</h3>
                         </div>
                        <div class="col-md-6 mt-15">
                            <label><strong>Heading</strong></label> 
                            <input type="text" class="form-control" value="{{ @$services->box1_heading }}" name="box1heading" placeholder=""   >
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->box1_image??'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                         <div class="col-md-6 mt-15">
                            <label><strong>Description</strong></label>                    
                            <textarea class="form-control"  name="box1desc"  rows="3" placeholder="" >{{ @$services->box1_desc }}</textarea>
                         </div>
                         <div class="col-md-6 mt-15">
                            <label class="mb-0" for=""><strong>Image</strong></label>
                            <input type="file" name="box1image" class="form-control outline-input mt-15 py-1">
                         </div>
                         
                         <div class="col-md-12 mt-15 text-left">
                            <h3>Box 2</h3>
                         </div>
                        <div class="col-md-6 mt-15">
                            <label><strong>Heading</strong></label> 
                            <input type="text" class="form-control" value="{{ @$services->box2_heading }}" name="box2heading" placeholder=""   >
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->box2_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                         <div class="col-md-6 mt-15">
                            <label><strong>Description</strong></label>                    
                            <textarea class="form-control"  name="box2desc"  rows="3" placeholder="" >{{ @$services->box2_desc }}</textarea>
                         </div>
                         <div class="col-md-6 mt-15">
                            <label class="mb-0" for=""><strong>Image</strong></label>
                            <input type="file" name="box2image" class="form-control outline-input mt-15 py-1">
                         </div>
                         <div class="col-md-12 mt-15 text-left">
                            <h3>Box 3</h3>
                         </div>
                        <div class="col-md-6 mt-15">
                            <label><strong>Heading</strong></label> 
                            <input type="text" class="form-control" value="{{ @$services->box3_heading }}" name="box3heading" placeholder=""   >
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->box3_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                         <div class="col-md-6 mt-15">
                            <label><strong>Description</strong></label>                    
                            <textarea class="form-control"  name="box3desc"  rows="3" placeholder="" >{{ @$services->box3_desc }}</textarea>
                         </div>
                         <div class="col-md-6 mt-15">
                            <label class="mb-0" for=""><strong>Image</strong></label>
                            <input type="file" name="box3image" class="form-control outline-input mt-15 py-1">
                         </div>
                         <div class="col-md-12 mt-15 text-left">
                            <h3>Box 4</h3>
                         </div>
                        <div class="col-md-6 mt-15">
                            <label><strong>Heading</strong></label> 
                            <input type="text" class="form-control" value="{{ @$services->box4_heading }}" name="box4heading" placeholder=""   >
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->box4_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                         <div class="col-md-6 mt-15">
                            <label><strong>Description</strong></label>                    
                            <textarea class="form-control"  name="box4desc"  rows="3" placeholder="" >{{ @$services->box4_desc }}</textarea>
                         </div>
                         <div class="col-md-6 mt-15">
                            <label class="mb-0" for=""><strong>Image</strong></label>
                            <input type="file" name="box4image" class="form-control outline-input mt-15 py-1">
                         </div>
                        <div class="col-md-12 mt-15 text-center">
                           <h3>Portfolio</h3>
                        </div>
                        <div class="col-md-12 mt-15">
                       <label><strong>Heading</strong></label> 
                       <input type="text" class="form-control" value="{{ @$services->portfolio_heading }}" name="portfolioheading" placeholder=""   >
                    </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Description</strong></label>                    
                           <textarea class="form-control"  name="portfoliodesc"  rows="3" placeholder="" >{{ @$services->portfolio_desc }}</textarea>
                        </div>
                        <div class="col-md-9 mt-15">
                           <label class="mb-0" for=""><strong>Image</strong></label>
                           <input type="file" name="portfolioimage" class="form-control outline-input mt-15 py-1">
                        </div>
                        <div class="col-md-3 mt-15">
                           <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                           <img src="{{asset(@$services->portfolio_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                        </div>
                        <div class="col-md-9 mt-15">
                            <label class="mb-0" for=""><strong>Logo</strong></label>
                            <input type="file" name="portfoliologo" class="form-control outline-input mt-15 py-1">
                         </div>
                         <div class="col-md-3 mt-15">
                            <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                            <img src="{{asset(@$services->portfolio_logo?? 'images/no_img.png')}}" alt="" width="150" height="80">
                         </div>
                        <div class="col-md-12 mt-15">
                            <label><strong>Heading (company)</strong></label> 
                            <input type="text" class="form-control" value="{{ @$services->company_heading }}" name="companyheading" placeholder=""   >
                         </div>
                             <div class="col-md-12 mt-15">
                                <label><strong>Description (company)</strong></label>                    
                                <textarea class="form-control"  name="fcompanydesc"  rows="3" placeholder="" >{{ @$services->company_desc }}</textarea>
                             </div>
                             
                        <div class="col-md-12 mt-15 text-center">
                           <h3>Choose Service</h3>
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Heading</strong></label> 
                           <input type="text" class="form-control" value="{{ @$services->choose_heading }}" name="chooseheading" placeholder=""   >
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Description</strong></label>                    
                           <textarea class="form-control"  name="choosedesc"  rows="3" placeholder="" >{{ @$services->choose_desc }}</textarea>
                        </div>
                        <div class="col-md-9 mt-15">
                           <label class="mb-0" for=""><strong>Image</strong></label>
                           <input type="file" name="chooseimage" class="form-control outline-input mt-15 py-1">
                        </div>
                        <div class="col-md-3 mt-15">
                           <label class="mb-0" for=""><strong>Thumbnail</strong></label><br>
                           <img src="{{asset(@$services->choose_image?? 'images/no_img.png')}}" alt="" width="150" height="80">
                        </div>
                        <div class="col-md-12 mt-15 text-center">
                           <h3>Our Proccess</h3>
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Heading</strong></label> 
                           <input type="text" class="form-control" value="{{ @$services->choose_heading }}" name="processheading" placeholder=""   >
                        </div>
                        <div class="col-md-12 mt-15">
                           <label><strong>Description</strong></label>                    
                           <textarea class="form-control"  name="processdesc"  rows="3" placeholder="" >{{ @$services->choose_desc }}</textarea>
                        </div>
                        <div class="col-md-12 mt-35 text-lg-right">
                           <button class="btn btn-primary" name="submit_form" type="submit">Update</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            @endif
         </section>
      </div>
   </div>
</div>
@endsection
@push('scripts')
<script>
   $("document").ready(function(){
       setTimeout(function(){
          $(".alert").hide();
       }, 5000 ); // 5 secs

   });
</script>
<script>
   $(document).ready(function(){
       $(document).on('change','#category', function(){
       var categoryId = $(this).val();
       $.ajax({
           url: "{{route('get-subcategor')}}",
           type: 'GET',
           data: {categoryId: categoryId},
           success: function(data){
               var html = '';
               html += '<option value="">Select</option>';
               $.each(data, function(i,v){
                   html += '<option value="'+v.id+'">'+v.name+'</option>';
               });
               $("#subcategory").html(html);
           }
       })
   });
   });
</script>
@endpush