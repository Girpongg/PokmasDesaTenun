<?php

namespace Database\Seeders;

use App\Models\BarangJual;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangJualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $katalogs = [
            [
                "image" => "assets/sarung2.webp",
                "name" => "Sarung Tenun Hijau",
                "price" => 120000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun hijau dengan motif khas Indonesia",
            ],
            
            [
                "image" => "assets/sarung3.webp",
                "name" => "Sarung Tenun Merah",
                "price" => 100000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun merah dengan motif khas Indonesia",
            ],

            [
                "image" => "assets/sarung4.webp",
                "name" => "Sarung Tenun Biru",
                "price" => 10000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun biru dengan motif khas Indonesia",
            ],

            [
                "image" => "assets/sarung5.webp",
                "name" => "Sarung Tenun Hitam",
                "price" => 120000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun hitam dengan motif khas Indonesia",
            ],
            
            [
                "image" => "assets/sarung1.jpg",
                "name" => "Paket Sarung",
                "price" => 300000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Kumpulan Sarung tenun dengan motif khas Indonesia",
            ],

        ];
        foreach ($katalogs as $katalog) {
            BarangJual::create($katalog);
        }
    }
}
