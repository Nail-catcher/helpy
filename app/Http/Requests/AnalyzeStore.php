<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalyzeStore extends FormRequest
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
            'first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'second_name' => [
                'required',
                'string',
                'max:255'
            ],
            'middle_name' => [
                'required',
                'string',
                'max:255'
            ],
            'phone' => [
                'required',
                'string',
                'max:255'
            ],
            'analname' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'nullable',
                'string',
                'max:255'
            ],
            'inz' => [
                'required',
                'string',
                'max:255'
            ],
            'date' => [
                'required',
                'date',

            ],
            'file' => [
                'nullable',
                'file',
                'mimes:pdf'
            ]

        ];
    }
}
