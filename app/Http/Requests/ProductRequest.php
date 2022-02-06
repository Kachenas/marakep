<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'supplier_id' => 'required|max:25',
            'product_name' => 'required|max:25',
            'product_price' => 'required',
            'quantity' => 'required',
            'product_status' => 'required'
        ];
    }
}
