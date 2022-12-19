<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ClientTableSeeder::class);
        $this->call(ContainerTableSeeder::class);
        $this->call(DockTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ShipTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(TruckTableSeeder::class);
        $this->call(WarehouseTableSeeder::class);
    }
}
