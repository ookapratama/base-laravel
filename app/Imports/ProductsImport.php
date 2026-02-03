<?php

namespace App\Imports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Products([
            'name'        => $row['nama_produk'],
            'description' => $row['deskripsi'] ?? null,
            'price'       => $row['harga'],
            'quantity'    => $row['stok'],
            'is_active'   => (strtolower($row['status'] ?? '') === 'aktif') ? 1 : 0,
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_produk' => 'required|string|max:255',
            'harga'       => 'required|numeric',
            'stok'        => 'required|integer',
        ];
    }
}
