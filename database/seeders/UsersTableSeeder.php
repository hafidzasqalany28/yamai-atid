<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'pengunjung',
                'email' => 'pengunjung@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'pengunjung',
            ],
            [
                'name' => 'pengunjung2',
                'email' => 'pengunjung2@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'pengunjung',
            ],
            [
                'name' => 'pengunjung3',
                'email' => 'pengunjung3@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'pengunjung',
            ],
            [
                'name' => 'pengunjung4',
                'email' => 'pengunjung4@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'pengunjung',
            ],
        ];
        User::insert($users);
    }
}
