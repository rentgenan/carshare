<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'model_id',
        'year_release',
        'number_car',
        'status',
    ];

    public function modelsCar()
    {
        return $this->hasMany(ModelCar::class);
    }
}
