<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ships = [
            [
                'country' => 'Ireland',
                'owner' => 'John Smith',
                'size' => 13000,
                'maxQuantity' => 10500,
                'productType' => 'Industrial'
            ],
            [
                'country' => 'Spain',
                'owner' => 'Luis Ramos',
                'size' => 11000,
                'maxQuantity' => 9000,
                'productType' => 'Agriculture'
            ]
        ];
        foreach ($ships as $key => $value) {
            Ship::create($value);
        }
    }
}
