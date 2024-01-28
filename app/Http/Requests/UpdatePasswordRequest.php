<?php

namespace App\Http\Requests;

use App\Rules\CurrentPassword;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'current_password' => ['required', new CurrentPassword()],
            'password' => 'required|string|min:4|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'current_password.required' => 'Mot de passe actuel obligatoire',
            'password.required' => 'Le champ nouveau mot de passe est obligatoire.',
            'password.min' => 'Le doit faire au moins 6 caractères.',
            'password.confirmed' => 'Les deux mots de passe ne correspondent pas.',
            'password_confirmation.required' => 'Confirmez votre mot de passe.',
        ];
    }
}
