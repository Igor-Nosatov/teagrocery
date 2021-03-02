<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => 'required',
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'receiver_name' => 'required|string|max:255',
            'receiver_phone' => 'required',
            'delivery' => 'required',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'house_number' => 'required',
            'apartament_number' => 'required',
            'floor' => 'required',
            'payment' => 'required',
        ];
    }
}
