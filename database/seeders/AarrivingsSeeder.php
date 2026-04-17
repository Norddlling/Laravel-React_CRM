<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Arriving;

class AarrivingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $arrivingsJson =  File::get('database/data/arrivings.json');
        $arrivingsData = json_decode($arrivingsJson, true);

        foreach ($arrivingsData as $arriving) {
            Arriving::updateOrCreate(
                ['id' => $arriving['id']],
                $arriving
            );
        }
    }
}
