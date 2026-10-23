<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectronicSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('electronics')->insert([
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'brand' => 'Samsung',
                'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, 256GB Storage, 200MP Camera',
                'price' => 18999000,
                'image' => 'GALAXY S24 ULTRA.jpeg',
                'category' => 'Smartphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MacBook Air M3',
                'brand' => 'Apple',
                'specs' => 'Apple M3 Chip, 16GB RAM, 512GB SSD, 13.6 inch Liquid Retina',
                'price' => 21999000,
                'image' => 'macbook Pro.jpeg',
                'category' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'brand' => 'Sony',
                'specs' => 'Noise Cancelling, 30 jam battery, Bluetooth 5.2',
                'price' => 4999000,
                'image' => 'sony.jpeg',
                'category' => 'Headphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LG OLED C3 55 inch',
                'brand' => 'LG',
                'specs' => 'OLED 4K, α9 Gen6 AI Processor, webOS 23, 120Hz',
                'price' => 17999000,
                'image' => 'LG Oled.jpeg',
                'category' => 'TV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Canon EOS R6 Mark II',
                'brand' => 'Canon',
                'specs' => '24.2MP Full Frame, 4K 60p, IBIS 8-stop',
                'price' => 32999000,
                'image' => 'cannon.jpeg',
                'category' => 'Kamera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xiaomi Redmi Note 13 Pro',
                'brand' => 'Xiaomi',
                'specs' => 'Snapdragon 7s Gen 2, 8GB RAM, 256GB, 200MP OIS',
                'price' => 3999000,
                'image' => 'redmi Not 13 Pro.jpeg',
                'category' => 'Smartphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}