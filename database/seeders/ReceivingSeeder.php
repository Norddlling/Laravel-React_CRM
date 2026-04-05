<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Receiving;

class ReceivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $receivingJson =  File::get('database/data/receiving.json');
        $receivingData = json_decode($receivingJson, true);

        foreach ($receivingData as $receiving) {
            Receiving::updateOrCreate(
                ['id' => $receiving['id']],
                $receiving
            );
        }
    }
}
