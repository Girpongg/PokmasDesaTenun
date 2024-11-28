<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Cebe',
                'email' => 'cb@gmail.com',
                'password' => Hash::make('cebe123')
            ],            [
                'name' => 'Gerry',
                'email' => 'gerry@gmail.com',
                'password' => Hash::make('gerry123')
            ]
            ];
            foreach($data as $d){
                User::create($d);
            }
    }
}
