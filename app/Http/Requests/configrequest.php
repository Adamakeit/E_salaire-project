<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class configrequest extends FormRequest
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
            'type' => 'required|unique:configurations,type',
            'valeur' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'type.required' => 'Le type est requis',
            'type.unique' => 'Le type doit être unique',
            'valeur.required' => 'La valeur est requise',
        ];
    }
}
