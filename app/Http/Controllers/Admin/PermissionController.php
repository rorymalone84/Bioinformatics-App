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

        return to_route('admin.permissions.index');
    }
}
