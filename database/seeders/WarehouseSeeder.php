<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouseJson =  File::get('database/data/warehouses.json');
        $warehouseData = json_decode($warehouseJson, true);

        foreach ($warehouseData as $warehouse) {
            Warehouse::updateOrCreate(
                ['id' => $warehouse['id']],
                $warehouse
            );
        }
    }
}
