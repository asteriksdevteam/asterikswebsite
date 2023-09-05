@extends('admin.layouts.app')
@section('content')
<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>ALL USER</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <a href="{{route('admin.user.create')}}" class="btn btn-primary my-10 py-1">Add New User</a>
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
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{@$key+1}}</td>
                                        <td>{{@$user->name}}</td>
                                        <td>{{@$user->email}}</td>
                                        <td>{{@$user->role->name}}</td>
                                        <td><a href="{{route('admin.user.edit',@$user->id)}}"><i class="fa fa-edit text-blue font-22"></i></a>  
                                            @if(auth()->check() && Auth::user()->sectionCheck('user-pernission'))
                                           / <a href="#" data-id="{{$user->id}}" data-role="{{$user->role_id}}"  class="permission-pop"><i class="fa fa-lock text-danger font-22"></i></a></td>
                                            @endif
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
    <div class="modal fade" id="permissionModal" tabindex="-1" role="dialog" aria-labelledby="permissionModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Permissions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body allPermission">
                </div>
            </div>
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
    $(document).on('click','.perCheck',function(){
        // var id = $(this).attr('data-id');
        var arr = [];
        $('input.perCheck:checkbox:checked').each(function () {
            arr.push($(this).val());
        });
        var menu_id = arr;
        var user_id = $("#user_id").val();
        var role_id = $("#role_id").val();
        $.ajax({
            url: "{{route('admin.per.store')}}",
            type: "POST",
            dataType: "html",
            data: {"_token": "{{ csrf_token() }}",menu_id:menu_id,user_id:user_id,role_id:role_id},
            success: function(data){
              var  html = '<div class="alert alert-success"><ul><li>Successfully Updated</li></ul></div>';
              $(".message").html(html);
            }
        })
    })
</script>
<script>
    $(document).on('click','.permission-pop',function(){
        var id = $(this).attr('data-id');
        var role = $(this).attr('data-role');
        $.ajax({
            url: "{{route('admin.getMenus')}}",
            type: "GET",
            dataType: "html",
            data: {id:id,role:role},
            success: function(data){
                $(".allPermission").html(data);
                $("#user_id").val(id);
                $("#role_id").val(role);
                $("#permissionModal").modal('show');
            }
        })
    })
</script>
@endpush