<?php

namespace Database\Seeders;

use App\Models\Truck;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TruckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trucks = [
            [
                'brand' => 'Merceded',
                'capacity' => 3,
                'maxLoad' => 60,
                'height' => 4.6
            ],
            [
                'brand' => 'Volvo',
                'capacity' => 2,
                'maxLoad' => 40,
                'height' => 4
            ]
        ];
        foreach ($trucks as $key => $value) {
            Truck::create($value);
        }
    }
}
