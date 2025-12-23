<?php

namespace App\Http\Requests;

class RoleRequest extends BaseRequest
{
    public function rules(): array
    {
        $roleId = $this->route('role');

        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:roles,slug,' . $roleId,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama role wajib diisi',
            'slug.required' => 'Slug wajib diisi',
            'slug.unique' => 'Slug sudah digunakan',
        ];
    }
}
