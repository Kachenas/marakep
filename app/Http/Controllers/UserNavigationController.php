<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserNavigation;
use App\Http\Requests\SupplierRequest;

class UserNavigationController extends Controller
{
    public $user_navigation = '';

    public function index()
    {
        return $user_navigation = UserNavigation::all();
    }

    public function store(Request $request)
    {
        return $user_navigation = UserNavigation::create($request->all());
    }


    public function show($id)
    {
        if ($user_navigation  = UserNavigation::find($id)) {
            return $user_navigation;
        }
        return response()->json(['message' => 'No User Navigation found!'], 404);
    }

    public function update(Request $request, $id)
    {
        $user_navigation = UserNavigation::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'User Navigation is Updated!'], 200);
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'User Navigation is Deleted!'], 200);
    }

}
