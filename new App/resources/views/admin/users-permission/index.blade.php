<div class="table-wrap">
    <div class="message"></div>
    <input type="hidden" name="user_id" id="user_id">
    <input type="hidden" name="role_id" id="role_id">
    <table id="" class="table w-100 display pb-30">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $key => $menu)
            <tr>
                <td>{{@$key+1}}</td>
                <td>{{@$menu->name}}</td>
                <td>{{@$menu->slug}}</td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="menu_id[]" class="custom-control-input perCheck" value="{{$menu->id}}" {{in_array($menu->id,$permissions) == true ? 'checked' : ''}} id="customCheck{{$menu->id}}">
                        <label class="custom-control-label" for="customCheck{{$menu->id}}"></label>
                    </div>
                    {{-- <input type="checkbox"  id="customCheck2" class="custom-control-input menu-check"   value="{{@$menu->id}}"/> --}}
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>