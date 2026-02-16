<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddUserRequest extends FormRequest
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
            'email'             => ['required', 'string', 'email', Rule::unique('users', 'email')],
            'password'          => ['required', 'string', 'min:6', 'confirmed'],
            'role_id'           => ['required', 'min:1'],
            'permissions'       => ['required', 'min:1'],
        ];
    }
}
