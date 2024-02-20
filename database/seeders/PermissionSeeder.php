<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'reserve car']);

        //create roles and assign existing permissions
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('reserve car');

        $adminRole = Role::create(['name' => 'admin']);

        // create demo users
        $user = User::factory()->create([
            'name' => 'Daffa',
            'email' => 'daffa@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($userRole);

        $user = User::factory()->create([
            'name' => 'Atmin',
            'email' => 'atmin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminRole);
    }
}
