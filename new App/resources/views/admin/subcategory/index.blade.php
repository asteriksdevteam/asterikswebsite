@extends('admin.layouts.app')
@section('content')
<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Service Subcategory</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <a href="{{route('admin.service.subcategory.create')}}" class="btn btn-primary my-10 py-1">Add New+</a>
                <div class="row">
                    <div class="col-12">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subCategory as $key => $subcategory)
                                    <tr>
                                        <td>{{@$key+1}}</td>
                                        <td>{{@$subcategory->getCategory->name}}</td>
                                        <td>{{@$subcategory->name}}</td>
                                        <!-- <td class="w-25"><img src="{{ asset('uploads/subcategory') }}/{{@$subcategory->imagePath}}" class="w-20"></td> -->
                                        <td><a href="{{route('admin.service.subcategory.edit',@$subcategory->id)}}"><i class="fa fa-edit text-blue"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
@endpush