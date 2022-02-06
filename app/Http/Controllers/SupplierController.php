<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public $suppliers = '';

    public function index()
    {
        return $suppliers = Supplier::all();
    }

    public function store(SupplierRequest $request)
    {
        return $suppliers = Supplier::create($request->all());
    }


    public function show($id)
    {
        if ($suppliers  = Supplier::find($id)) {
            return $suppliers;
        }
        return response()->json(['message' => 'No Supplier found!'], 404);
    }

    public function update(Request $request, $id)
    {
        $suppliers = Supplier::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Supplier is Updated!'], 200);
    }

    public function destroy($id)
    {
        return "Supplier is Deleted";
    }
}
