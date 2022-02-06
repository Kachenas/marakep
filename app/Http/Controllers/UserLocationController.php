<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLocation;
use App\Http\Requests\SupplierRequest;

class UserLocationController extends Controller
{
    public $user_location = '';

    public function index()
    {
        return $user_location = UserLocation::all();
    }

    public function store(Request $request)
    {
        return $user_location = UserLocation::create($request->all());
    }


    public function show($id)
    {
        if ($user_location  = UserLocation::find($id)) {
            return $user_location;
        }
        return response()->json(['message' => 'No User Location found!'], 404);
    }

    public function update(Request $request, $id)
    {
        $user_location = UserLocation::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'User Location is Updated!'], 200);
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'User Location is Deleted!'], 200);
    }
}
