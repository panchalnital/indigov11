<?php

namespace App\Imports;

use App\Models\Product;
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
        return new Product([
            'name'=> $row['name'],
            'description' => $row['description'], 
            'sku' => $row['sku'],
            'price' => $row['price'],
            'stock' => $row['stock'],
            'category_id' => $row['category_id'],
            'image_url' => $row['image_url'],
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }
}
