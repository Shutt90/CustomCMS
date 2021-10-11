<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'title' => 'required|max:30',
            'content' => 'required',
            'image' => 'max:255',
            'file_path' => 'image|mimes:jpg,png,jpeg',
            'tab_title' => 'required|max:30',
            'meta_title' => 'required|max:30',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ];
    }
}
