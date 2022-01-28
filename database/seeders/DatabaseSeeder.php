<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [[
            'name' => 'Manager',
            'email' => 'manager@manager.com',
            'email_verified_at' => now(),
            'role' => 'manager',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ],[
            'name' => 'Manager',
            'email' => 'programmer@programmer.com',
            'email_verified_at' => now(),
            'role' => 'programmer',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]];
        foreach ($users as $user){
            User::create($user);
        }
    }
}
