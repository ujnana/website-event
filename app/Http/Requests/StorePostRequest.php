<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'thumbnail' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
            ],
            'content' => ['required'],
            'category_id' => ['required'],
            'author' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
