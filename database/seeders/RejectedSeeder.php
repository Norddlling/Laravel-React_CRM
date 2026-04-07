<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Rejected;

class RejectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $rejectedJson =  File::get('database/data/rejected.json');
        $rejectedData = json_decode($rejectedJson, true);

        foreach ($rejectedData as $rejected) {
            Rejected::updateOrCreate(
                ['id' => $rejected['id']],
                $rejected
            );
        }
    }
}
