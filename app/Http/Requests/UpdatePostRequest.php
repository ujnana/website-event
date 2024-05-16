<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'thumbnail' => ['nullable'],
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
