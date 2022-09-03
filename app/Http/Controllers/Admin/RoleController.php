<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //displays roles index 
    public function index(){
        //display all roles except for admin and doctor, as these are required to remain as they are
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    //form for creating a new role
    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        $validate = $request->validate(['name' => ['required', 'min:3','max:20']]);
        Role::create($validate);

        return to_route('admin.roles.index')->with('message','New role sucessfully created');
    }

    public function edit(Role $role){
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role){
        $validate = $request->validate(['name' => ['required', 'min:3','max:20']]);
        $role->update($validate);
        return to_route('admin.roles.index', $validate)->with('message','Role sucessfully updated');
    }

    public function destroy(Role $role){
        $role->delete();
        return to_route('admin.roles.index')->with('message','Role sucessfully deleted');
    }
}
