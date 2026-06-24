<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\Seeders\ProfessionalSeeder;
use Database\Seeders\HealthPlanSeeder;
use Database\Seeders\ServiceTypeSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ServiceTypeSeeder::class,
            ProfessionalSeeder::class,
            HealthPlanSeeder::class
        ]);
    }

}
