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
                "image" => "assets/baju1.webp",
                "name" => "Sarung Tenun Biru",
                "price" => 120000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun biru dengan motif khas Indonesia",
            ],
            
            [
                "image" => "assets/batik.jpg",
                "name" => "Sarung Tenun Kuning",
                "price" => 100000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun kuning dengan motif khas Indonesia",
            ],

            [
                "image" => "assets/batik2.jpg",
                "name" => "Sarung Tenun Hijau",
                "price" => 10000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun hijau dengan motif khas Indonesia",
            ],

            [
                "image" => "assets/baju1.webp",
                "name" => "Sarung Tenun Biru",
                "price" => 120000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun biru dengan motif khas Indonesia",
            ],
            
            [
                "image" => "assets/batik.jpg",
                "name" => "Sarung Tenun Kuning",
                "price" => 100000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun kuning dengan motif khas Indonesia",
            ],

            [
                "image" => "assets/batik2.jpg",
                "name" => "Sarung Tenun Hijau",
                "price" => 10000,
                "stock" => 10,
                "tipe" => 1,
                "description" => "Sarung tenun hijau dengan motif khas Indonesia",
            ],
        ];
        foreach ($katalogs as $katalog) {
            BarangJual::create($katalog);
        }
    }
}