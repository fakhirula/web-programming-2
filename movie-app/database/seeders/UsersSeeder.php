<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Fakhirul Akmal',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'rul@example.com',
            'role' => 'admin'
        ]);

        User::create([
            'nama' => 'John Doe',
            'username' => 'johndoe',
            'password' => Hash::make('secret'),
            'email' => 'john@example.com',
            'role' => 'user'
        ]);
    }
}
