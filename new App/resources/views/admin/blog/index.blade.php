@extends('admin.layouts.app')
@section('content')
<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Blog</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <a href="{{route('admin.blog.create')}}" class="btn btn-primary my-10 py-1">Add New+</a>
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
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="data-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{@$blog->name ?? ""}}</td>
                                        <td><img src="{{ asset(@$blog->thumb) }}" width="30"></td>
                                        <td>{{@$blog->status==1 ?'Active' : 'InActive'}}</td>
                                        <td><a href="{{route('admin.blog.edit',
                                        ['id'=>@$blog->id])}}"><i class="fa fa-edit"></i></a>
                                        {{-- <a href="#" data-route="{{route('blogs.destroy', ['blog'=>$blog->id])}}" class="delete">Delete</a></td> --}}
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