<?php

namespace Database\Seeders;

use App\Models\HealthPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HealthPlan::create([
            'name' => 'SUS',
            'active' => true,
        ]);

        HealthPlan::create([
            'name' => 'Unimed',
            'active' => true,
        ]);

        HealthPlan::create([
            'name' => 'Particular',
            'active' => true,
        ]);
    }

}
