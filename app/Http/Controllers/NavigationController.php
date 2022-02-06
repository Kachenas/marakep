<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;
use App\Http\Requests\SupplierRequest;

class NavigationController extends Controller
{
    public $navigation = '';

    public function index()
    {
        return $navigation = Navigation::all();
    }

    public function store(Request $request)
    {
        return $navigation = Navigation::create($request->all());
    }


    public function show($id)
    {
        if ($suppliers  = Navigation::find($id)) {
            return $suppliers;
        }
        return response()->json(['message' => 'No Supplier found!'], 404);
    }

    public function update(Request $request, $id)
    {
        $suppliers = Navigation::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Navigation is Updated!'], 200);
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'Navigation is Deleted!'], 200);
    }
}
