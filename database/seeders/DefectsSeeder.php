<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Defect;

class DefectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $defectJson =  File::get('database/data/defects.json');
        $defectData = json_decode($defectJson, true);

        foreach ($defectData as $defect) {
            Defect::updateOrCreate(
                ['id' => $defect['id']],
                $defect
            );
        }
    }
}
