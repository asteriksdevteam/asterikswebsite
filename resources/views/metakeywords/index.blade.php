@extends('layouts.app')
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
                <a href="{{route('meta.create')}}" class="btn btn-primary my-10 py-1">Add New+</a>
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
                                    <th>Page Name</th>
                                    <th>Meta Title</th>
                                    <th>Meta Keyword</th>
                                    <th>Meta Description</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($metas as $meta)
                                    <tr>
                                        <td>{{ $meta['page']->page_name }}</td>
                                        <td>{{ $meta['meta_title'] }}</td>
                                        <td>{{ $meta['meta_tags'] }}</td> 
                                        <td>{{ $meta['meta_description'] }}</td>
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