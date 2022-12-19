<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'fname' => 'Roger',
                'lname' => 'Stones',
                'phoneNumber' => 71224567,
                'email' => 'roger.stones@gmail.com',
                'address' => 'Zahle',
                'payment' => 5000
            ],
            [
                'fname' => 'Harry',
                'lname' => 'Lee',
                'phoneNumber' => 76673126,
                'email' => 'harry.lee@gmail.com',
                'address' => 'Beirut',
                'payment' => 7500
            ]
        ];
        foreach ($clients as $key => $value) {
            Client::create($value);
        }
    }
}
