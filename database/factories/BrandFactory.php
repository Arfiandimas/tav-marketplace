<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $datas = [
            "Toyota",
            "Honda",
            "Nissan",
            "Mazda",
            "Mitsubishi",
            "Subaru",
            "Suzuki",
            "Lexus",
            "Daihatsu",
            "Acura",
            "Infiniti",
            "BMW",
            "Mercedes-Benz",
            "Audi",
            "Volkswagen",
            "Porsche",
            "Opel",
            "Smart",
            "Maybach",
            "Ford",
            "Chevrolet",
            "Tesla",
            "Dodge",
            "GMC",
            "Chrysler",
            "Cadillac",
            "Lincoln",
            "Buick",
            "RAM",
            "Jeep",
            "Hyundai",
            "Kia",
            "Genesis",
            "Ferrari",
            "Lamborghini",
            "Maserati",
            "Alfa Romeo",
            "Fiat",
            "Lancia",
            "Pagani",
            "Peugeot",
            "Citroën",
            "Renault",
            "Bugatti",
            "Rolls-Royce",
            "Bentley",
            "Aston Martin",
            "Jaguar",
            "Land Rover",
            "Mini",
            "McLaren",
            "Lotus",
            "Vauxhall",
            "Volvo",
            "Polestar",
            "Saab",
            "Geely",
            "BYD",
            "NIO",
            "Chery",
            "Wuling",
            "Haval",
            "XPeng",
            "MG",
            "Tata",
            "Mahindra",
            "Proton",
            "Perodua",
            "Koenigsegg",
            "Rimac",
            "Lucid Motors",
            "Rivian",
            "VinFast"
        ];

        static $number = 0;
        
        return ["name" => $datas[$number++]];
    }
}
