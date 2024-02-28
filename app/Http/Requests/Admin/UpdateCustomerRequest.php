<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('customer')->id;

        return [
            'name' => 'required',
            'email' => 'email|unique:customers,email,'.$id,
            'phone' => 'required|min:7|max:15|unique:customers,phone,'.$id,
            'address' => 'required'
        ];
    }
}
