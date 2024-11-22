<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'string',
                'max:255',
                Password::min(8)->numbers()->mixedCase(),
                'confirmed'
            ],
        ];
    }
}
