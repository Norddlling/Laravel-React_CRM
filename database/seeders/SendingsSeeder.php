<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Sending;

class SendingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sendingsJson =  File::get('database/data/sendings.json');
        $sendingsData = json_decode($sendingsJson, true);

        foreach ($sendingsData as $sending) {
            Sending::updateOrCreate(
                ['id' => $sending['id']],
                $sending
            );
        }
    }
}
