<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:4'],
            'description' => ['required', 'min:1'],
            'price' => ['required'],
            'picture' => ['required'],
            'category_id' => ['required'],
            'size' => ['nullable'],
            'quantity' => ['nullable'],
        ];
    }
}
