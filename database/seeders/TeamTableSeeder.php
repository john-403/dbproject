<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'size' => 3,
                'leader' => 'Eric', # fk
                'task' => 'Unloading',
                'equipment' => 'Forklift',
            ],
            [
                'size' => 3,
                'leader' => 'Tim', # fk
                'task' => 'Filling',
                'equipment' => 'Stacker',
            ]
        ];
        foreach ($teams as $key => $value) {
            Team::create($value);
        }
    }
}
