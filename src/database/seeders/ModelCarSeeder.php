<?php

namespace Database\Seeders;

use App\Models\ModelCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelsCars = [
            1 => ['Camry 80','Camry 70','Land Cruiser 300','Land Cruiser 200',],
            2 => ['Optima','Rio',],
            3 => ['Vesta Sport','Vesta','Granta','Largus',],
            4 => ['Grandland X','Crossland',],
            5 => ['Duster','Sandero','Arkana','Kaptur','Logan',],
            6 => ['Discovery','Range Rover Velar','Range Rover Sport','Range Rover',],
            7 => ['Golf','Touareg','Tiguan','Polo',],
            8 => ['3 series','X5','X7','i7',],
        ];

        foreach($modelsCars as $vendor_id => $models) {
            foreach($models as $model) {
                ModelCar::create([
                    'name' => $model,
                    'vendor_id' => $vendor_id,
                ]);
            }
        }
    }
}
