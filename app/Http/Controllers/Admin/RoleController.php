<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToArray;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{


    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();


        return view('Backend.Admin.roles', compact('roles', 'permissions'));
    }

    public function permissions($id_role)
    {

        $permissions = Permission::all();
        $permission = Role::find($id_role)->permissions;
        $ids_permission = $permission->pluck('id')->ToArray();


        return view('Backend.Admin.permissions', compact('permissions', 'ids_permission', 'id_role'));
    }

    public function update_permission(Request $request)
    {


        Role::find($request->role_id)->syncPermissions($request->permission);

        flash()->addSuccess('Permission Updated To Role');

        return redirect()->back();
    }

    public function store(Request $request)
    {

        $role = Role::create(['guard_name' => 'admin', 'name' => $request->role_name]);
        $role->syncPermissions($request->permission);
        flash()->addSuccess('Role  Created Success');

        return redirect()->back();
    }

    public function delete($id_role)
    {

        Role::find($id_role)->delete();


        flash()->addSuccess('Role  Deleted Success');

        return redirect()->back();
    }
}
