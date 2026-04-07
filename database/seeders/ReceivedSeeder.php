<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Received;

class ReceivedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $receivedJson =  File::get('database/data/received.json');
        $receivedData = json_decode($receivedJson, true);

        foreach ($receivedData as $received) {
            Received::updateOrCreate(
                ['id' => $received['id']],
                $received
            );
        }
    }
}
