<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'user_id' => User::where('email', 'cb@gmail.com')->first()->id,
                'order_date' => now(),
                'customer_name' => 'Cebe',
                'customer_wa' => '085102703174',
                'address' => 'Jalan Raya Darmo No 15',
                'total_price' => 500000,
                'tipe' => 1,
            ],            [
                'user_id' => User::where('email', 'gerry@gmail.com')->first()->id,
                'order_date' => now(),
                'customer_name' => 'Gerry',
                'customer_wa' => '085102703175',
                'address' => 'Jalan Siwalankerto No 20',
                'total_price' => 300000,
                'tipe' => 2,
            ]
            ];
            foreach ($data as $d) {
                Order::create($d);
            }
    }
}
