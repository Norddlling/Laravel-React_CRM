<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Sended;

class SendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sendedJson =  File::get('database/data/sended.json');
        $sendedData = json_decode($sendedJson, true);

        foreach ($sendedData as $sended) {
            Sended::updateOrCreate(
                ['id' => $sended['id']],
                $sended
            );
        }
    }
}
