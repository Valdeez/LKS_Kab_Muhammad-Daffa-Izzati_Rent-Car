<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            "name" => "Avanza",
            "image" => "Avanza Img",
            "brand_name" => "Toyota",
            "price_per_day" => "100000",
            "stock" => "5",
        ]);
    }
}
