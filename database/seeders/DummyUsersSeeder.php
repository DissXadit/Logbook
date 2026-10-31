<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $userData = [
        //     [
        //         'name' => 'Aditya Surya',
        //         'nik' => '123456789',
        //         'level' => 'admin',
        //         'password' => bcrypt('12345'),
        //     ],
        //     [
        //         'name' => 'Aditya',
        //         'nik' => '123456788',
        //         'level' => 'analis',
        //         'password' => bcrypt('12345'),
        //     ]
        // ];

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'level' => 'user',
            'password' => bcrypt('user'),
        ]);
    }
}
