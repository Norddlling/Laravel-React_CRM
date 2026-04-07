<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Placed;

class PlacedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $placedJson =  File::get('database/data/placed.json');
        $placedData = json_decode($placedJson, true);

        foreach ($placedData as $placed) {
            Placed::updateOrCreate(
                ['id' => $placed['id']],
                $placed
            );
        }
    }
}
