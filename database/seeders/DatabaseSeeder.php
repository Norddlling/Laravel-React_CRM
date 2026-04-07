<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        $this->call([
            UsersSeeder::class,
            WarehouseSeeder::class,
            PlacesSeeder::class,
            CarriagesSeeder::class,
            ProductsSeeder::class,
            CodesSeeder::class,
            PhysicalSeeder::class,
            DefectsSeeder::class,
            ReceivingSeeder::class,
            TransferingSeeder::class,
            TemporarySeeder::class,
            PlacedSeeder::class,
            RejectedSeeder::class
        ]);
    }
}
