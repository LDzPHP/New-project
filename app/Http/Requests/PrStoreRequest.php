<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'pr_id' => ['required'],
            'pr_price' => ['required'],
            'description' => ['required'], 
        ];
    }
}