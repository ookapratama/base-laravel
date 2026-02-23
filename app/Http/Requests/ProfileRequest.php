<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;

class ProfileRequest extends BaseRequest
{
    public function rules(): array
    {
        $user = auth()->user();
        
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'avatar.image' => 'File harus berupa gambar',
            'avatar.max' => 'Ukuran gambar maksimal 2MB',
        ];
    }

    /**
     * Handle failed validation for web requests
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        // If request expects JSON (e.g., AJAX), use BaseRequest's JSON response
        if ($this->expectsJson()) {
            parent::failedValidation($validator);
        }

        // Otherwise, throw regular ValidationException to redirect back with errors
        throw new \Illuminate\Validation\ValidationException($validator);
    }
}
