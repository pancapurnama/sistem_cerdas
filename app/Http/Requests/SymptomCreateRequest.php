<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SymptomCreateRequest extends FormRequest
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
            'code' => 'required| unique:diseases| max:8',
            'name' => 'max:250 | required'
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Code wajib diisi',
            'name.required' => 'Name wajib diisi',
            'code.max' => 'Code maksimal :max karakter',
            'name.max' => 'Name maksimal :max karakter'
        ];
    }
}
