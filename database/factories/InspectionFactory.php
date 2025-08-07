<?php

namespace Database\Factories;

use App\Models\InspectionSubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawData = [
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kendaraan Bebas Banjir"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Nomor Rangka & Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Tidak Ada Indikasi Kecelakaan Besar"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Chasis"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Bamper Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kap Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Tiang Penyangga Kap Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Shock Kap Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Emblem"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Fender Kanan Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Fender Kiri Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Pintu Depan Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Pintu Depan Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Bumper Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Fender Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Fender Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Pintu Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Pintu Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Bagian Bodi & Bumper')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kap Belakang / Kap Bagasi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pintu, Kap Mesin & Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Atap"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pintu, Kap Mesin & Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Pengunci Kap Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pintu, Kap Mesin & Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Gril Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Kanan Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Kiri Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kaca Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Wipers Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Spion Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Spion Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Spion Lipat Elektrik Kiri Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Spion Lipat Elektrik Kanan Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kaca & Spion')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Wipers Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Kabut"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Sein"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Mundur"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Hazard"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Lampu Eksterior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Lampu Automatis"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Velg Depan Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Ban Depan Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Dop Depan Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Velg Depan Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Ban Depan Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Dop Depan Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Velg Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Ban Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Dop Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Velg Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Kondisi Ban Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Velg & Ban')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Eksterior");
                })->value('id'),
                "name" => "Dop Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sabuk Pengaman')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sabuk Pengaman"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Audio & Sistem Alarm')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Pemutar Audio"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Audio & Sistem Alarm')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Antena"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Audio & Sistem Alarm')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sistem Keamanan / Alarm"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Audio & Sistem Alarm')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Speaker"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Audio & Sistem Alarm')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kamera Mundur"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sistem Pendingin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kabut & Penghilang Embun"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tombol Ac"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Konsol Tengah"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kisi-kisi Ac Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kisi-kisi Ac Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jam"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tilt / Relescopic Steer"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kunci Steer"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Steering Switch"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Power Steering"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Klakson"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Lampu Instrumen"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cruise Control"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Speedometer"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Lampu Indikator"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Lampu Peringatan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Layar Multi Fungsi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Speedometer & Odometer"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tuas Wiper Cermin Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tuas Air Wiper"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Paddle Shift"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Navigasi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kaca Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Spion Tengah Anti Silau"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kamera Mundur & Sensor Parkir"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sambungan Daya"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Lighter"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Asbak"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Handel Persneling"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Pedal Rem Tangan / Kaki"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Armrest Tengah"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Penghalau Cahaya & Lampu"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Elaktrik Seat Memori"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kelengkapan Interior')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Steer"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Dashboard"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Laci Dashboard"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Karpet Dasar"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Karpet Tambahan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Door Trim Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Door Trim Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Door Trim Panel Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Door Trim Panel Belakang Kiri"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover A Pilar Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover A Pillar"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover B Pilar Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover B Pillar"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover C Pilar Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover C Pillar"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Plafon"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jok Driver"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jok Penumpang Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jok Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jok Di Baris Tiga"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Stelan Jok"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Pemanas Jog"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Pendingin Jok"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover Ban Serap"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Dudukan Speaker"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Karpet & Cover')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kerusi Keselamatan Anak"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sunroof, Moonroof, Convertible Top')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sunroof/moonroof"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sunroof, Moonroof, Convertible Top')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Convertible Top"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Remote Kunci"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tombol Start Engine"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Sistem Sentral Lock"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Child Lock"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Remote Power Back Door"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Tuas Tutup Tangki"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Power Window Kiri Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Power Window Kanan Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Power Window Kiri Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Jendela & Sistem Penguncian')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Power Window Belakang Kanan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Cover Bagasi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Jaring Bagasi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Lampu Bagasi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Dongkrak & Tool Kit"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Ban Cadangan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Ruang Bagasi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Interior");
                })->value('id'),
                "name" => "Kondisi & Tekanan Ban Cadangan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Engine Starting"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Engine Idling"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Akselarasi Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Suara Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi, Roda Penggerak & Kopling')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Transmisi / Perpindahan Transmisi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi, Roda Penggerak & Kopling')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Bunyi Perpindahan Transmisi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi, Roda Penggerak & Kopling')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Sistem Tuas Rem"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi, Roda Penggerak & Kopling')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Perpindahan Roda Penggerak"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi, Roda Penggerak & Kopling')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Sistem Kopling"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kemudi & Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Sistem Kemudi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kemudi & Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Suara Kaki Kaki"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kemudi & Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Abs Operation"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Kemudi & Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Tes Jalan");
                })->value('id'),
                "name" => "Sistem Pengereman"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Oli Mesin"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Coolant"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Transmisi / Perpindahan Penggerak"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Minyak Rem"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Minyak Power Steering"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Cairan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Air Wiper"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Belts"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Mesin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Engine Mounting"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pendingin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Radiator"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pendingin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Tutup Radiator"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pendingin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Kipas Radiator"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pendingin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Tangki Radiator"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pendingin')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Master Rem"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Kelistrikan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Dinamo Starter"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Kelistrikan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Aki"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pembuangan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Kondisi Sistem Pembuangan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Pembuangan')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Cover Mesin Bawah"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Transmisi & Sistem Penggerak')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Mouting Transmisi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Kemudi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Sistem Poros Kemudi"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Kemudi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Kestabilan Ban"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Sistem Kemudi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Pompa Power Steering"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Suspensi')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Shock Braker"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Kampas Rem Depan"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Kampas Rem Belakang"
            ],
            [
                "inspection_sub_category_id" => InspectionSubCategory::where('name', 'Rem')->whereHas('inspectionCategory', function($query){
                    $query->where("name", "Bagian Bawah");
                })->value('id'),
                "name" => "Master Rem"
            ]
        ];
        
        static $number = 0;
        return $rawData[$number++];
    }
}
