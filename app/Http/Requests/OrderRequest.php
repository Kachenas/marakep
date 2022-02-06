<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_id' => 'required|max:25',
            'order_reference' => 'required|max:25',
            'order_price' => 'required',
            'order_quantity' => 'required',
            'order_date' => 'required|date_format:Y-m-d',
            'status' => 'required',
            'remarks' => 'required'
        ];
    }
}
