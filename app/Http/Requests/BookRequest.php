<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'author_id' => ['required'],
            'publisher_id' => ['required'],
            'cover_image' => [request()->method == 'POST' ? 'required' : '', 'image', 'mimes:jpeg,jpg,png,gif,svg', 'max:2048'],

        ];
    }
}