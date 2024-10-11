<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
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
            'departement' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:employers,email',
            'contact' => 'required|unique:employers,contact',
            // 'montant_journalier' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'departement' => 'le departement est requis',
            'name.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'email.required' => 'L\'adresse email est requise',
            'email.unique' => 'Cette adresse email est déjà utilisée',
            'contact.required' => 'Le numéro de contact est requis',
            'contact.unique' => 'Ce numéro de contact est déjà utilisé',
            // 'montant_journalier.required' => 'Le montant journalier est requis',
            // 'montant_journalier.integer' => 'Le montant journalier est numerique',
        ];
    }
}
