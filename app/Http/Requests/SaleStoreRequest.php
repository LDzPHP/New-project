<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'print_id' => ['required'],
            'price' => ['required'],
            'customer_id' => ['required'],
            'sum' => ['required'], 
        ];
    }
}


