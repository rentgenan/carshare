<?php

namespace Database\Seeders;

use App\Models\OperationMoney;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperationMoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperationMoney::factory(200)->create();
    }
}
