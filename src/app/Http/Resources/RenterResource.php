<?php

namespace App\Http\Resources;

use App\Models\OperationMoney;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OperationMoneyResource;

class RenterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'patronymic' => $this->patronymic,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'status' => $this->status,
            'passport' => $this->passport,
            'card_number' => $this->card_number,
            'balance' => $this->balance,
            // 'operations_money' => OperationMoney::where('renter_id', $this->id)->get(),
            // 'operations_money' => OperationMoneyResource::collection($this->operations_money),
        ];
    }
}
