<?php

namespace Database\Seeders;

use App\Models\Container;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $containers = [
            [
                'width' => 66,
                'height' => 86,
                'depth' => 104
            ],
            [
                'width' => 67,
                'height' => 87,
                'depth' => 105
            ]
        ];
        foreach ($containers as $key => $value) {
            Container::create($value);
        }
    }
}
