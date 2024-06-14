<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'nullable',
            'title' => 'nullable',
            'description' => 'nullable',
            'thumbnail_path' => 'nullable',
            'thumbnail' => 'nullable',
            'media_path' => 'nullable',
            'media' => 'nullable',
            'duration' => 'nullable',
            'app' => 'nullable',
            'status' => 'nullable'
        ];
    }
}
