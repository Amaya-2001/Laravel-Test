<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRegistrationRequest extends FormRequest
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
            'sku_code' => 'required|string|max:15',
            'sku_name' => 'required|string|max:255|unique:products',
            'mrp' => 'required|string|max:255',
            'distributor_price' => 'required|string|max:255',
            'weight_volume_value' => 'required|integer',
            'weight_volume_unit' => 'required|string|in:mg,g,kg',
        ];
    }

    public function messages()
    {
        return [
            'sku_code.required' => 'The SKU Code field is required.',
            'sku_name.required' => 'The SKU Name field is required.',
            'mrp.required' => 'The MRP field is required.',
            'distributor_price.required' => 'The Distributor Price field is required.',
            'weight_volume_value.required' => 'The Weight/Volume field is required.',
            'weight_volume_unit.required' => 'Please select a unit.',

        ];
    }
}
