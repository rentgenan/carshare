<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Renter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'phone_number',
        'status',
        'passport',
        'card_number',
        'balance',
    ];

    public function operationsMoney()
    {
        return $this->hasMany(OperationMoney::class);
    }

}
