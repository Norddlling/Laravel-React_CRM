<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Transfering;

class TransferingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $transferingJson =  File::get('database/data/transfering.json');
        $transferingData = json_decode($transferingJson, true);

        foreach ($transferingData as $transfering) {
            Transfering::updateOrCreate(
                ['id' => $transfering['id']],
                $transfering
            );
        }
    }
}
