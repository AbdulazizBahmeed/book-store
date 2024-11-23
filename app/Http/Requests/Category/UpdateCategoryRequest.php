<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string' , 'min:3', 'max:255', Rule::unique('categories', 'name')->ignore($this->category)]
        ];
    }
}
