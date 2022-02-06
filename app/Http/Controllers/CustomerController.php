<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public $customers = '';

    public function index()
    {
        return $customers = Customer::all();
    }

    public function store(Request $request)
    {
        //return $customers = Customer::create($request->all());
        return $request;
    }

    public function show($id)
    {
        if ($customers  = Customer::find($id)) {
            return $customers;
        }
        return response()->json(['message' => 'No User found!'], 404);
    }

    public function update(CustomerRequest $request, $id)
    {
        $customers = Customer::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Customer is Updated!'], 200);
    }


    public function destroy($id)
    {
        return "Customer is Deleted";
    }
}
