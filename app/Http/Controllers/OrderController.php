<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public $orders = '';

    public function index()
    {
        return $orders = Order::all();
    }

    public function store(OrderRequest $request)
    {
        return $orders = Order::create($request->all());
    }

    public function show($id)
    {
        if ($orders  = Order::find($id)) {
            return $orders;
        }
        return response()->json(['message' => 'No Orders found!'], 404);
    }

    public function update(Request $request, $id)
    {
        $orders = Order::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Order is Updated!'], 200);
    }

    public function destroy($id)
    {
        return "Order is Deleted";
    }
}
//https://app.sqldbm.com/MySQL/Draft/
