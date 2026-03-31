<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Place;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $placeJson =  File::get('database/data/places.json');
        $placeData = json_decode($placeJson, true);

        foreach ($placeData as $place) {
            Place::updateOrCreate(
                ['id' => $place['id']],
                $place
            );
        }
    }
}