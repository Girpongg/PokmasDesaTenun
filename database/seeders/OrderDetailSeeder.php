<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\BarangJual;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'barangjual_id' => BarangJual::where('name', 'Sarung Tenun Biru')->first()->id,
                'order_id' => Order::where('customer_name', 'Cebe')->first()->id,
                'quantity' => 5,
                'price' => 100000,
                'status' => 1
            ],            [
                'barangjual_id' => BarangJual::where('name', 'Sarung Tenun Kuning')->first()->id,
                'order_id' => Order::where('customer_name', 'Gerry')->first()->id,
                'quantity' => 3,
                'price' => 100000,
                'status' => 1
            ]
            ];
            foreach($data as $d) {
                OrderDetail::create($d);
            }
    }
}
