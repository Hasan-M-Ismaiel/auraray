<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'full_name'                      => ['required', 'string', 'max:100'],
            'email'                          => ['required', 'email' , 'max:500'],
            'subject'                        => ['required', 'string', 'max:1020'],
            'message'                        => ['required', 'string', 'max:2024'],
        ];
    }
}