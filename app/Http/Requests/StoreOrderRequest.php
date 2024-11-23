<?php

namespace App\Http\Requests;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'orderable_id' => ['required', 'integer'],
            'orderable_type' => [
                'required',
                'string',
                Rule::in([Book::class, Category::class])
            ],
            'from' => ['required', 'date', 'after_or_equal:today'],
            'to' => ['required', 'date', 'after_or_equal:from'],
        ];
    }
}
