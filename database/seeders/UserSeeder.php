<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //creating admin user
        $admin = User::create([
            'full_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Aa123456'),
        ]);
        $AdminrRole = Role::findByName('Administrator');
        $AdminrRole->users()->attach($admin);

        //creating regular user
        $admin = User::create([
            'full_name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('Aa123456'),
        ]);
        $UserRole = Role::findByName('User');
        $AdminrRole->users()->attach($admin);

        // creating other regular users
        $users = User::factory(50)->create();
        $UserRole->users()->attach($users);
    }
}
