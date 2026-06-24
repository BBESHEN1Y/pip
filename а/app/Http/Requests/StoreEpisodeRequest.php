<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEpisodeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'episode_number' => ['required', 'integer', 'min:1'],
            'duration_minutes' => ['required', 'integer', 'min:1'],
            'series_id' => ['required', 'exists:series,id'],
        ];
    }
}