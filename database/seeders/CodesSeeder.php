<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Code;

class CodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $codeJson =  File::get('database/data/codes.json');
        $codeData = json_decode($codeJson, true);

        foreach ($codeData as $code) {
            Code::updateOrCreate(
                ['id' => $code['id']],
                $code
            );
        }
    }
}
