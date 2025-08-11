<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $datas = [
            "Sedan",
            "Hatchback",
            "SUV",               // Sport Utility Vehicle
            "MPV",               // Multi Purpose Vehicle (minivan)
            "Crossover",         // Gabungan antara SUV dan hatchback/sedan
            "Coupe",             // Mobil 2 pintu bergaya sporty
            "Convertible",       // Mobil atap terbuka
            "Station Wagon",     // Mirip sedan dengan bagasi memanjang
            "Pickup Truck",
            "Van",
            "Minivan",
            "Roadster",          // Mobil kecil 2 kursi atap terbuka
            "Jeep",              // Umumnya untuk off-road, kadang dikategorikan SUV
            "Truck",             // Truk besar untuk muatan (heavy duty)
            "Microcar",          // Mobil mungil (biasanya 2 penumpang)
            "Limousine",
            "Fastback",
            "Liftback",
            "Targa",             // Semi-convertible
            "Buggy",             // Mobil ringan untuk off-road
            "Supercar",          // Mobil sport performa tinggi
            "Hypercar",          // Di atas supercar, sangat eksklusif
        ];

        static $number = 0;
        
        return [
            "name" => $datas[$number++],
            "icon" => 'https://picsum.photos/640/480?random=' . rand(1,10000),
        ];
    }
}
