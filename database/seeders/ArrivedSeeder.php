<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Arrived;

class ArrivedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $arrivedJson =  File::get('database/data/arrived.json');
        $arrivedData = json_decode($arrivedJson, true);

        foreach ($arrivedData as $arrived) {
            Arrived::updateOrCreate(
                ['id' => $arrived['id']],
                $arrived
            );
        }
    }
}
