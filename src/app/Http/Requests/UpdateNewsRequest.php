<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $news = $this->route('news');

        return [
            'category_id' => ['required', 'exists:categories,id'],
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('news', 'title')->ignore($news->id),
            ],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
        ];
    }
}