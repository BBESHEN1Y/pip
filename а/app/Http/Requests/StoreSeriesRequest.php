<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeriesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'release_year' => ['required', 'integer', 'min:1900', 'max:2100'],
            'genre' => ['required', 'string', 'max:255'],
        ];
    }
}