<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'email' => ['required', 'email', 'string'],
            'phone' => ['required', 'int'],
            'message' => ['required', 'min:10'],

        ];
    }


    public function messages(): array
    {
        return [
            'name' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой'
            ],
            'email' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой',
                'email' => 'Поле должно быть формата example@example.ru',
            ],

            'phone' => [
              'required' => 'Поле не может быть пустым',
              'int' => 'В поле не может быть букв',
            ],

            'message' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой',
                'min:10' => 'Минимум содержание 10 символов'
            ],

        ];
    }
}
