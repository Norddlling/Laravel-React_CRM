<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Displaced;

class DisplacedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $displacedJson =  File::get('database/data/displaced.json');
        $displacedData = json_decode($displacedJson, true);

        foreach ($displacedData as $displaced) {
            Displaced::updateOrCreate(
                ['id' => $displaced['id']],
                $displaced
            );
        }
    }
}
