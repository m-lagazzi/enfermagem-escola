<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professional;

class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professional::create([
            'name' => 'Enfermeira',
            'active' => true,
        ]);

        Professional::create([
            'name' => 'Tecnica 1',
            'active' => true,
        ]);

        Professional::create([
            'name' => 'Tecnica 2',
            'active' => true,
        ]);
    }

}
