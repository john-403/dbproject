<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = [
            [
                'fname' => 'Eric',
                'lname' => 'White',
                'position' => 'Employee',
                'phoneNumber' => 70567234,
                'email' => 'eric.white@port.com',
                'address' => 'Beirut',
                'salary' => 2000
            ],
            [
                'fname' => 'Tim',
                'lname' => 'King',
                'position' => 'Employee',
                'phoneNumber' => 71332564,
                'email' => 'tim.king@port.com',
                'address' => 'Byblos',
                'salary' => 2000
            ]
        ];
        foreach ($staff as $key => $value) {
            Staff::create($value);
        }
    }
}
