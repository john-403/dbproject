<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'title' => 'Shaft',
                'category' => 'Industrial',
                'weight' => 25,
                'size' => 'Large',
                'manufacturer' => 'DirectIndustry'
            ],
            [
                'title' => 'Gear',
                'category' => 'Industrial',
                'weight' => 50,
                'size' => 'Large',
                'manufacturer' => 'DirectIndustry'
            ]
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
