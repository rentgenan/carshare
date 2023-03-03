<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OperationCar;
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
        $this->call(VendorSeeder::class);
        $this->call(ModelCarSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(RenterSeeder::class);
        $this->call(OperationMoneySeeder::class);
        $this->call(HistorySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(OperationCarSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
