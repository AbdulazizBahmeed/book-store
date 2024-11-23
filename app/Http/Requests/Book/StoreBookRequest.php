<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function rules(): array
    {
        
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'author' => ['required', 'string', 'min:3', 'max:255'],
            'borrow_rate' => ['required', 'integer', 'min:1'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'cover_image' => [
                'required',
                'image',
                'dimensions:ratio=5/8'
            ],
        ];
    }
}
