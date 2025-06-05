<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // User
            ['title' => 'user_index', 'menu' => 'User', 'permission' => 'See', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_add', 'menu' => 'User', 'permission' => 'Add', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_edit', 'menu' => 'User', 'permission' => 'Edit', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_delete', 'menu' => 'User', 'permission' => 'Delete', 'created_at' => now(), 'updated_at' => now(),],
            // Role
            ['title' => 'role_index', 'menu' => 'Role', 'permission' => 'See', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'role_add', 'menu' => 'Role', 'permission' => 'Add', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'role_edit', 'menu' => 'Role', 'permission' => 'Edit', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'role_delete', 'menu' => 'Role', 'permission' => 'Delete', 'created_at' => now(), 'updated_at' => now(),],
            // Profile
            ['title' => 'profile_index', 'menu' => 'Profile', 'permission' => 'See', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'profile_edit', 'menu' => 'Profile', 'permission' => 'Edit', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'profile_delete', 'menu' => 'Profile', 'permission' => 'Delete', 'created_at' => now(), 'updated_at' => now(),],
        ];

        Permission::insert($permissions);
    }
}
