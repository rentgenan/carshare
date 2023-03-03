<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperationMoney extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'renter_id',
        'date',
        'sum',
    ];

    public function renter()
    {
        return $this->belongsTo(Renter::class);
    }
}
