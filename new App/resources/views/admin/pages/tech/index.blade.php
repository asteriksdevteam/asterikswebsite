@extends('admin.layouts.app')

@section('content')
<!-- Container -->
<div class="container">
<style>
    .sup-num{
    background: #f57b20;
    padding: 0;
    color: #fff;
    left: 67px;
    /* top: 10px; */
    border-radius: 100%;
    width: 25px;
    height: 25px;
    text-align: center;
    position: absolute;
    }
</style>
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Technologies</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <a href="{{route('admin.tech.create')}}" class="btn btn-primary my-10 py-1">Add New+</a>
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (@$tech as $key => $data)
                                    <tr>
                                        <td>{{@$key+1}}</td>
                                        <td>{{@$data->Name}}</td>
                                        <td  class="position-relative"><a href="{{route('admin.tech.images',@$data->id)}}" title=""><span class="sup-num">{{count($data->sliderImages)}}</span><i class="fa fa-image fa-4x"aria-hidden="true" style="color: #bf3434;"></i></a></td>
                                        <td>{{@$data->techCategory->Name}}</td>
                                        <td><a href="{{route('admin.tech.edit',@$data->id)}}"><i class="fa fa-edit text-blue"></i></a></td>
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