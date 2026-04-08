<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Arrivingnumber;

class AarrivingnumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $arrivingNumberJson =  File::get('database/data/arrivingnumbers.json');
        $arrivingNumberData = json_decode($arrivingNumberJson, true);

        foreach ($arrivingNumberData as $arrivingNumber) {
            Arrivingnumber::updateOrCreate(
                ['id' => $arrivingNumber['id']],
                $arrivingNumber
            );
        }
    }
}
