<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouses = [
            [
                'size' => 1500,
                'floors' => 1,
                'type' => 'Consumable'
            ],
            [
                'size' => 5000,
                'floors' => 2,
                'type' => 'Automobile'
            ]
        ];
        foreach ($warehouses as $key => $value) {
            Warehouse::create($value);
        }
    }
}
