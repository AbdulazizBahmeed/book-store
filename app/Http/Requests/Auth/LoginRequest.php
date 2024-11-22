<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'max:255', 'email', 'exists:users,email'],
            'password' => [
                'required',
                'string',
                'min:6',
                'max:255',
            ],
        ];
    }
}
