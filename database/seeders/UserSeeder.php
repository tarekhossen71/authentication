<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_role = Role::where('slug', 'super-admin')->first();
        User::create([
            'role_id'=> $super_role->id,
            'name'=>'Super',
            'email'=>'super@gmail.com',
            'password'=> Hash::make(12345678),
            'email_verified_at'=> now()
        ]);

        $admin_role = Role::where('slug', 'admin')->first();
        User::create([
            'role_id'=> $admin_role->id,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make(12345678),
            'email_verified_at'=> now()
        ]);
        
        $client_role = Role::where('slug', 'client')->first();
        User::create([
            'role_id'=> $client_role->id,
            'name'=>'Client',
            'email'=>'client@gmail.com',
            'password'=> Hash::make(12345678),
        ]);
    }
}
