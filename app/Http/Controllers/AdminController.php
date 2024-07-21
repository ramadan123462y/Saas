<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {

        $admins = Admin::all();
        $roles = Role::all();


        return view('Backend.Admin.admins', compact('admins', 'roles'));
    }



    public function store(Request $request)
    {
        $admin =  $this->createAdmin($request);

        $admin->syncRoles($request->roles);
        flash()->addSuccess('Admin  Created Success');

        return redirect()->back();
    }


    public function edit($id)
    {
        $roles = Role::all();

        $admin = Admin::find($id);
        $ids_roles = $admin->roles->pluck('id')->toArray();

        return view('Backend.Admin.edit_admin', compact('roles', 'admin', 'ids_roles'));
    }


    public function update(Request $request)
    {
        $admin = Admin::find($request->admin_id);
        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if (isset($request->password)) {
            $updateData['password'] = Hash::make($request->password);
        }
        $admin->update($updateData);
        $admin->syncRoles($request->roles);
        flash()->addSuccess('Admin  Updated Success');
        return redirect()->back();
    }

    public  function delete($id)
    {

        Admin::find($id)->delete();
        flash()->addSuccess('Admin  Deleted Success');

        return redirect()->back();
    }
    
    private function createAdmin($request)
    {

        return  Admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
