<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RenterCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'id' => 'nullable|uuid',
            'first_name' => 'required|string:max:255',
            'last_name' => 'required|string:max:255',
            'patronymic' => 'required|string:max:255',
            'email' => 'required|email',
            'phone_number' => 'required|max:11',
            'status' => 'nullable|string',
            'passport' => 'required|max:10',
            'card_number' => 'required|max:16',
            'balance' => 'nullable',
        ];
    }
}
