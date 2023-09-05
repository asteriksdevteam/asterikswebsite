<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Role;
use app\Models\Menu;
use app\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserPermissionController extends Controller
{
    public function getMenus(Request $request)
    {
        $menus = Menu::get();
        $permissions = Permission::where('user_id',$request->id)->first();
        $permissions = explode(',',@$permissions->menu_id);

        return view('admin.users-permission.index',compact('menus','permissions'));
    }

    public function store(Request $request)
    {
        $menu_id = implode(',',$request->menu_id);
        $users = Permission::updateOrCreate(
            ['user_id' => $request->user_id],
            ['role_id' => $request->role_id,'menu_id' => $menu_id, 'user_id' => $request->user_id]
        );
       return;
    }

}
