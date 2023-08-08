@extends('layouts.app')

@section('content')
<style>
    .text-wrap-custom{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 220px;
    }
</style>
<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>What We Do</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
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
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Sub Heading</th>
                                        <th>Sub Description</th>
                                        {{-- <th>Thumbnail</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wwd as $key => $data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$data->Name}}</td>
                                        <td>{{$data->Heading}}</td>
                                        <td class="text-wrap-custom">{{$data->Description}}</td>
                                        <td>{{$data->Sub_Heading}}</td>
                                        <td class="text-wrap-custom">{{$data->Sub_Description}}</td>
                                        {{-- <td><img src="{{asset($data->Image)}}" width="160" alt=""></td> --}}
                                        <td><a href="{{route('wwd.edit',$data->id)}}"><i class="fa fa-edit text-blue"></i></a></td>
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