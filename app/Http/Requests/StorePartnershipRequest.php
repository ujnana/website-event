<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnershipRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'event_name' => ['required'],
            'event_date' => ['required', 'date'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'document' => ['required', 'mimes:pdf', 'max:51200'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
