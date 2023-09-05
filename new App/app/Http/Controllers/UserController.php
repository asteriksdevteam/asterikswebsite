<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Role;
use Illuminate\Support\Facades\Hash;
use DB;
class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->where('role_id','!=',1)->get();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        $role = DB::table('roles')->where('id','!=',1)->get();
        return view('admin.users.create',compact('role'));
    }

    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role_id = $request->role_id;
        $users->save();
        return redirect()->route('user.index')->with('success', 'Successfully Added!!!');
    }

    public function edit($id)
    {
        $users = User::with('role')->find($id);
        $role = DB::table('roles')->where('id','!=',1)->get();
        return view('admin.users.create',compact('role','users'));
    }

    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role_id = $request->role_id;
        $users->save();
        return redirect()->route('admin.user.index')->with('success', 'Successfully Updated!!!');

    }

    public function inActive($id)
    {
        $users = User::find($id);
        $users->status = 0;
        $users->save();
        return redirect()->route('admin.user.index')->with('danger', 'Successfully Disabled!!!');
    }
}
