<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceType::create([
            'name' => 'Medicação',
            'requires_medication_detail' => true,
            'active' => true,
        ]);

        ServiceType::create([
            'name' => 'Troca',
            'requires_medication_detail' => false,
            'active' => true,
        ]);

        ServiceType::create([
            'name' => 'Banho',
            'requires_medication_detail' => false,
            'active' => true,
        ]);
    }

}
