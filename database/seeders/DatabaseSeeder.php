<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Lelang',
            'email' => 'admin@lelang.test',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Andi',
            'email' => 'andi@lelang.test',
            'password' => Hash::make('password123'),
            'role' => 'pembeli',
        ]);
    }
}
