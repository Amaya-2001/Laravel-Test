<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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

            'name' => 'required|string|max:255',
            'nic' => 'required|string|max:255|unique:user_regs',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|unique:user_regs',
            'gender' => 'required|string|max:255',
            'territory' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user_regs',
            'password' => 'required|string|min:8',
        ];
    }

    //custom validation message
    public function messages()
    {
        return [
            'name.required' => 'The Name field is required.',
            'nic.required' => 'The NIC field is required.',
            'address.required' => 'The Address field is required.',
            'mobile.required' => 'The Mobile field is required.',
            'gender.required' => 'Please select a Gender.',
            'territory.required' => 'Please select a Territory.',
            'username.required' => 'The User Name field is required.',
            'password.required' => 'The Password field is required.',
            'password.min' => 'The Password field must be at least :min characters.',
        ];
    }
}
