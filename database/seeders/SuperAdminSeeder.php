<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Super Seller',
            'email' => 'seller@gmail.com',
            'password' => Hash::make('seller123'),
            'role' => 'seller'
        ]);

        User::create([
            'name' => 'Super User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 'user'
        ]);
    }
}   
