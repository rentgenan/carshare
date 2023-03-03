<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelCar extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }
}
