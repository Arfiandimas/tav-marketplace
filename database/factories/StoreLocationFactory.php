<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoreLocation>
 */
class StoreLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $datas = [
            [
                "name" => "TAV Semarang",
                "address" => "Jl. Kompol Maksum No.280-284, Peterongan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242",
                "maps" => "https://maps.app.goo.gl/93jpsS64AaR2cGqP8",
                "opening_time" => "08:00:00",
                "closing_time" => "17:00:00",
                "opening_day" => "Senin",
                "closing_day" => "Sabtu",
                "phone" => "081325704810",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TAV Jakarta",
                "address" => "Pendek, Gedung Kesenian Miss Tjitjih, Gg. Kabel VI, RT.13/RW.2, Cemp. Baru, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640",
                "maps" => "https://maps.app.goo.gl/jYJbbkJjDomidK2z9",
                "opening_time" => "08:00:00",
                "closing_time" => "17:00:00",
                "opening_day" => "Senin",
                "closing_day" => "Sabtu",
                "phone" => "081280045617",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TAV Yogyakarta",
                "address" => "692P+M45, Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166",
                "maps" => "https://maps.app.goo.gl/dQ2vsKc5tpuNpFez5",
                "opening_time" => "08:00:00",
                "closing_time" => "17:00:00",
                "opening_day" => "Senin",
                "closing_day" => "Sabtu",
                "phone" => "081280045616",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        static $number = 0;

        return $datas[$number++];
    }
}
