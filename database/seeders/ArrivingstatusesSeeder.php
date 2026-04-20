<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Arrivingstatus;

class ArrivingstatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $arrivingStatusJson =  File::get('database/data/arrivingstatuses.json');
        $arrivingStatusData = json_decode($arrivingStatusJson, true);

        foreach ($arrivingStatusData as $arrivingStatus) {
            Arrivingstatus::updateOrCreate(
                ['id' => $arrivingStatus['id']],
                $arrivingStatus
            );
        }
    }
}
