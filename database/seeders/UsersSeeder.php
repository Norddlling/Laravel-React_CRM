<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "id" => 1,
                "name" => "Test Admin", 
                "email" => "testadmin@example.com",
                "role" => "admin",
                "dismissed" => false,
                "password" => Hash::make('AdminPassword1'),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 2,
                "name" => "Test Manager", 
                "email" => "testmanager@example.com",
                "role" => "manager",
                "dismissed" => false,
                "password" => Hash::make('ManagerPassword1'),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id" => 3,
                "name" => "Test Worker", 
                "email" => "testworker@example.com",
                "role" => "worker",
                "dismissed" => false,
                "password" => Hash::make('WorkerPassword1'),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
