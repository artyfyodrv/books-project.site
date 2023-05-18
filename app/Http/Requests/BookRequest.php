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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'pages' => ['required', 'int'],
            'shortDescription' => ['required', 'string'],
            'longDescription' => ['required', 'min:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'name' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой'
            ],
            'pages' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой',
            ],

            'shortDescription' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой'
            ],

            'longDescription' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой',
                'min:50' => 'Минимум содержание 10 символов'
            ],

        ];
    }
}
