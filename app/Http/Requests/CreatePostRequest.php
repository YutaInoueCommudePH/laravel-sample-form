<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:250'],
            'description' => ['required', 'string'],
            'page' => ['required', 'integer'],
            'published_at' => ['required', 'date_format:Y-m-d', 'before:now'],
        ];
    }

    public function data()
    {
        return $this->only('title', 'description', 'page', 'published_at');
    }
}
