<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Sendingnumber;

class SendingnumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sendingNumberJson =  File::get('database/data/sendingnumbers.json');
        $sendingNumberData = json_decode($sendingNumberJson, true);

        foreach ($sendingNumberData as $sendingNumber) {
            Sendingnumber::updateOrCreate(
                ['id' => $sendingNumber['id']],
                $sendingNumber
            );
        }
    }
}
