<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'content' => 'required|min:5',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il campo title è obbligatorio',
            'title.max' => 'Il campo title deve avere al massimo :max caratteri',
            'title.min' => 'Il campo title deve avere al minimo :min caratteri',
            'content.required' => 'Il campo content è obbligatorio',
            'content.min' => 'Il campo content deve avere al minimo :min caratteri',
        ];

    }
}
