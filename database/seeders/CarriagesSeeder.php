<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Carriage;

class CarriagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carriageJson =  File::get('database/data/carriages.json');
        $carriageData = json_decode($carriageJson, true);

        foreach ($carriageData as $carriage) {
            Carriage::updateOrCreate(
                ['id' => $carriage['id']],
                $carriage
            );
        }
    }
}
