<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Transfered;

class TransferedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $transferedJson =  File::get('database/data/transfered.json');
        $transferedData = json_decode($transferedJson, true);

        foreach ($transferedData as $transfered) {
            Transfered::updateOrCreate(
                ['id' => $transfered['id']],
                $transfered
            );
        }
    }
}
