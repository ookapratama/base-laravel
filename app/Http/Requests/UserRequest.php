<?php

namespace App\Http\Requests;

class UserRequest extends BaseRequest
{
    public function rules(): array
    {
        $userId = $this->route('user');

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ];

        // Password required only on create
        if ($this->isMethod('post')) {
            $rules['password'] = 'required|string|min:6|max:255';
            $rules['email'] .= '|unique:users,email';
        } else {
            // On update, password is optional
            $rules['password'] = 'nullable|string|min:6|max:255';
            $rules['email'] .= '|unique:users,email,' . $userId;
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ];
    }

    /**
     * Handle failed validation for web requests
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        // If request expects JSON, use API-style response
        if ($this->expectsJson()) {
            parent::failedValidation($validator);
        }

        // Otherwise, redirect back with errors (web-style)
        throw new \Illuminate\Validation\ValidationException($validator);
    }
}
