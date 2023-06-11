<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
//use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
 
class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $permission = Permission::create(['name' => 'Admin']);
        $permission->assignRole($adminRole);
 
        $adminUser = User::factory()->create([
            'email' => 'ndumisani@gmail.com',
            'password' => bcrypt('Dumisani1')
        ]);
        $adminUser->assignRole('Administrator');
    }
}
