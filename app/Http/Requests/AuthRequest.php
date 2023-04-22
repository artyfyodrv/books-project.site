<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => ['required', 'string', 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required']
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

            'password' => [
                'required' => 'Поле не может быть пустым',
                'string' => 'Поле должно быть строкой',
            ]
        ];
    }
}
