<?php

namespace App\Http\Requests;

class MenuRequest extends BaseRequest
{
    public function rules(): array
    {
        $menuId = $this->route('menu');

        return [
            'parent_id' => 'nullable|exists:menus,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:menus,slug,' . $menuId,
            'icon' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'order_no' => 'required|integer|min:0',
            'is_active' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama menu wajib diisi',
            'slug.required' => 'Slug wajib diisi',
            'slug.unique' => 'Slug sudah digunakan',
            'order_no.required' => 'Urutan wajib diisi',
        ];
    }
}
