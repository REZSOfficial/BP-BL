<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin role
        $adminRole = Role::create(['name' => 'admin']);
        $adminPermission = Permission::create(['name' => 'admin']);
        $adminPermission->assignRole($adminRole);

        $adminUser = User::factory()->create([
            'name' => 'develnet',
            'email' => 'peter.bocz@develnet.net',
            'password' => Hash::make('123'),
        ]);

        $adminUser->assignRole($adminRole);
    }
}
