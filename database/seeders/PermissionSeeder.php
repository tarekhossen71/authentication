<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = Module::updateOrCreate(['name'=> 'Dashboard Manage'],['name'=>'Dashboard Manage']);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Dashboard Manage',
            'slug'=>'app.dashboard',
        ]);

        $modules = Module::updateOrCreate(['name'=> 'Users Manage'],['name'=>'Users Manage']);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Users Manage Access',
            'slug'=>'app.users.manage.index',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Users Manage Create',
            'slug'=>'app.users.manage.create',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Users Manage Edit',
            'slug'=>'app.users.manage.edit',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Users Manage Destroy',
            'slug'=>'app.users.manage.destroy',
        ]);

        $modules = Module::updateOrCreate(['name'=> 'Roles Manage'],['name'=>'Roles Manage']);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Role Manage Access',
            'slug'=>'app.roles.manage.index',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Role Manage Create',
            'slug'=>'app.roles.manage.create',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Role Manage Edit',
            'slug'=>'app.roles.manage.edit',
        ]);
        Permission::create([
            'module_id'=>$modules->id,
            'name'=> 'Role Manage Destroy',
            'slug'=>'app.roles.manage.destroy',
        ]);
    }
}
