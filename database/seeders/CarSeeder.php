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
            "name" => "Innova",
            "image" => "assets/car/Iq2T8W3345omyXdf12pDkGFWBc8WRh6vxZLhlA5c.png",
            "brand_name" => "Toyota",
            "price_per_day" => "150000",
            "stock" => "5",
        ]);
    }
}
