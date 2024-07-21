<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['guard_name' => 'admin', 'name' => 'update']);
        Permission::create(['guard_name' => 'admin', 'name' => 'store']);
        Permission::create(['guard_name' => 'admin', 'name' => 'delete']);
        $role = Role::create(['guard_name' => 'admin', 'name' => 'super_admin']);

        $role->givePermissionTo(Permission::all());

        DB::table('admins')->delete();


        $admin =  Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $admin->assignRole('super_admin');
    }
}
