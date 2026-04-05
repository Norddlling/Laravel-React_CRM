<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Temporary;

class TemporarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $temporaryJson =  File::get('database/data/temporary.json');
        $temporaryData = json_decode($temporaryJson, true);

        foreach ($temporaryData as $temporary) {
            Temporary::updateOrCreate(
                ['id' => $temporary['id']],
                $temporary
            );
        }
    }
}
