<?php

namespace Database\Seeders;

use App\Models\Dock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $docks = [
            [
                'name' => 'Flamingo Bay Piers',
                'size' => 12000,
                'depth' => 10
            ],
            [
                'name' => 'Pine Key Harbor',
                'size' => 15000,
                'depth' => 13
            ]
        ];
        foreach ($docks as $key => $value) {
            Dock::create($value);
        }
    }
}
