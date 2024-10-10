<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "title" => "CrosFit",
            "price" => 29.0,
            "image" => "/assets/images/gg-1.png",
        ]);

        Product::create([
            "title" => "Ultimate Frisbee",
            "price" => 21.0,
            "image" => "/assets/images/hh-2.png",
        ]);

        Product::create([
            "title" => "Footgolf",
            "price" => 26.0,
            "image" => "/assets/images/ee-3.png",
        ]);

        Product::create([
            "title" => "pickleball",
            "price" => 45.0,
            "image" => "/assets/images/aa-1.png",
        ]);

        Product::create([
            "title" => "Yoga",
            "price" => 38.0,
            "image" => "/assets/images/yoga-postures-exercises-png.jpg",
        ]);

        Product::create([
            "title" => "Cycling",
            "price" => 34.0,
            "image" => "/assets/images/Cycling.png",
        ]);

        Product::create([
            "title" => "Running",
            "price" => 24.0,
            "image" => "/assets/images/running.png",
        ]);

        Product::create([
            "title" => "Martial Arts",
            "price" => 22.0,
            "image" => "/assets/images/Martial-arts.jpg",
        ]);

        Product::create([
            "title" => "Surfing",
            "price" => 20.0,
            "image" => "/assets/images/swimming.png",
        ]);

        Product::create([
            "title" => "Skateboarding",
            "price" => 26.0,
            "image" => "/assets/images/Skate.jpg",
        ]);

        Product::create([
            "title" => "Paddleboarding",
            "price" => 30.0,
            "image" => "/assets/images/Paddle.jpg",
        ]);

        Product::create([
            "title" => "Football",
            "price" => 20.0,
            "image" => "/assets/images/football.png",
        ]);

        Product::create([
            "title" => "Cricket",
            "price" => 34.0,
            "image" => "/assets/images/cricket.png",
        ]);

        Product::create([
            "title" => "Hockey",
            "price" => 32.0,
            "image" => "/assets/images/hockey.jpg",
        ]);

        Product::create([
            "title" => "Tennis",
            "price" => 34.0,
            "image" => "/assets/images/tennis.jpg",
        ]);
    }
}
