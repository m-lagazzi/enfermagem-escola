<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@apae.com',
            'password' => bcrypt('senha123'),
            'role' => 'admin',
            'active' => true,
        ]);

        User::create([
            'name' => 'Enfermagem',
            'email' => 'enfermagem@apae.com',
            'password' => bcrypt('senha123'),
            'role' => 'nursing',
            'active' => true,
        ]);
    }
}
