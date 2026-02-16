<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
//            'name'              => ['required', 'regex:/^[A-Za-z_][A-Za-z\d_]*$/','string', 'max:255'],
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', Rule::unique('users', 'email')->ignore($this->user)],
            'password'          => ['nullable', 'confirmed', 'min:6'],
            'role_id'           => ['required'],
            'permissions'       => ['required'],

        ];
    }
}
