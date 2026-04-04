<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Physical;

class PhysicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $physicalJson =  File::get('database/data/physical.json');
        $physicalData = json_decode($physicalJson, true);

        foreach ($physicalData as $physical) {
            Physical::updateOrCreate(
                ['id' => $physical['id']],
                $physical
            );
        }
    }
}
