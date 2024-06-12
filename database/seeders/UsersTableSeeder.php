<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create roles and permissions
          /*$editArticlesPermission = Permission::create(['name' => 'edit articles']);
          $deleteArticlesPermission = Permission::create(['name' => 'delete articles']);
  
          $writerRole = Role::create(['name' => 'writer']);
          $adminRole = Role::create(['name' => 'admin']);
  
          $writerRole->givePermissionTo($editArticlesPermission);
          $adminRole->givePermissionTo([$editArticlesPermission, $deleteArticlesPermission]);
  
          // Create users and assign roles
          $writer = User::create([
              'name' => 'Writer User',
              'email' => 'writer@example.com',
              'password' => Hash::make('password')
          ]);
          $writer->assignRole($writerRole);
  
          $admin = User::create([
              'name' => 'Admin User',
              'email' => 'admin@example.com',
              'password' => Hash::make('password')
          ]);
          $admin->assignRole($adminRole);*/
           // Create roles and permissions
    }
}
