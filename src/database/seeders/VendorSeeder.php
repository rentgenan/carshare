<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    static $vendors = ['Toyota', 'KIA', 'Lada', 'Opel', 'Renault', 'Land Rover', 'Volkswagen', 'BMW',];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$vendors as $vendor) {
            Vendor::create([
                'name' => $vendor,
            ]);
        }
    }
}
