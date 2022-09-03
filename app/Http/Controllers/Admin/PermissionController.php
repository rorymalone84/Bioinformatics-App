<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //displays permissions index
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    //form for creating a new permission
    public function create(){
        return view('admin.permissions.create');
    }

    public function store(Request $request){
        $validate = $request->validate(['name' => ['required', 'min:3','max:20']]);
        Permission::create($validate);

        return to_route('admin.permissions.index')->with('message','New Permission sucessfully created');
    }

    public function edit(Permission $permission){
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission){
        $validate = $request->validate(['name' => ['required', 'min:3','max:20']]);
        $permission->update($validate);
        return to_route('admin.permissions.index', $validate)->with('message','Permission sucessfully updated');
    }

    public function destroy(Permission $permission){
        $permission->delete();
        return to_route('admin.permissions.index')->with('message','Permission sucessfully deleted');
    }
}
