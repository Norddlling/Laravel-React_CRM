<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Sendingstatus;

class SendingstatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sendingStatusJson =  File::get('database/data/sendingstatuses.json');
        $sendingStatusData = json_decode($sendingStatusJson, true);

        foreach ($sendingStatusData as $sendingStatus) {
            Sendingstatus::updateOrCreate(
                ['id' => $sendingStatus['id']],
                $sendingStatus
            );
        }
    }
}
