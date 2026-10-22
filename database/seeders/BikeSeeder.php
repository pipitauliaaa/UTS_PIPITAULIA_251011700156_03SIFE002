<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan facade DB

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        $bikes = [
            [
                'brand' => 'Polygon',
                'type' => 'Mountain Bike',
                'rent_price' => 15000.00,
                'gear_count' => 21,
                'image' => 'sepeda1.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Giant',
                'type' => 'Road Bike',
                'rent_price' => 20000.00,
                'gear_count' => 18,
                'image' => 'sepeda2.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Trek',
                'type' => 'Hybrid Bike',
                'rent_price' => 18000.00,
                'gear_count' => 24,
                'image' => 'sepeda3.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Specialized',
                'type' => 'Electric Bike',
                'rent_price' => 25000.00,
                'gear_count' => 7,
                'image' => 'sepeda4.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Cannondale',
                'type' => 'Folding Bike',
                'rent_price' => 12000.00,
                'gear_count' => 6,
                'image' => 'sepeda5.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Bianchi',
                'type' => 'Track Bike',
                'rent_price' => 22000.00,
                'gear_count' => 1,
                'image' => 'sepeda6.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Scott',
                'type' => 'Gravel Bike',
                'rent_price' => 19000.00,
                'gear_count' => 22,
                'image' => 'sepeda7.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Fuji',
                'type' => 'Touring Bike',
                'rent_price' => 16000.00,
                'gear_count' => 27,
                'image' => 'sepeda8.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Kona',
                'type' => 'Downhill Bike',
                'rent_price' => 23000.00,
                'gear_count' => 20,
                'image' => 'sepeda9.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Santa Cruz',
                'type' => 'Enduro Bike',
                'rent_price' => 24000.00,
                'gear_count' => 22,
                'image' => 'sepeda10.jpg',
                'available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Masukkan data secara langsung ke tabel 'bikes'
        DB::table('bikes')->insert($bikes);
    }
}