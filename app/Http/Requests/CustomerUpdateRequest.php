<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class CustomerUpdateRequest extends FormRequest
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
        return [
            'name' => 'sometimes|string|min:3|max:255',
            'email' => 'sometimes|email:rfc,dns|unique:customers,email,' . $this->customer->id,
            'phone' => 'sometimes|regex:/^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$/',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'phone.regex' => 'Phone must be a valid saudi phone number',
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Customer name',
            'email' => 'Customer email',
            'phone' => 'Customer phone',
        ];
    }

    /**
     * Update the customer.
     */
    public function updateCustomer()
    {
        return DB::transaction(function () {
            $this->customer->update([
                'name' => $this->exists('name') ? $this->name : $this->customer->name,
                'email' => $this->exists('email') ? $this->email : $this->customer->email,
                'phone' => $this->exists('phone') ? $this->phone : $this->customer->phone,
            ]);

            return $this->customer->fresh();
        });
    }
}
