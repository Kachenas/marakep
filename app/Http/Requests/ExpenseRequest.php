<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_incurred' => 'required|date_format:Y-m-d',
            'amount' => 'required',
            'description' => 'required',
            'date_paid' => 'required|date_format:Y-m-d',
            'status' => 'required'
        ];
    }
}
