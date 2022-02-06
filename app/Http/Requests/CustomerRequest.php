<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'first_name' => 'required|max:25',
            'middle_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'birthdate' =>  'required|date_format:Y-m-d',
            'street' => 'required|max:50',
            'barangay' => 'required|max:50',
            'city' => 'required|max:50',
            'province' => 'required|max:50',
            'country' => 'required|max:50',
            'contact_number' => 'required|max:50',
            'valid_id' => 'required|max:50',
            'signature' => 'required|max:50'
        ];
    }
}
