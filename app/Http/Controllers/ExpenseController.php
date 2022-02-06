<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Http\Requests\ExpenseRequest;

class ExpenseController extends Controller
{

    public $expense = '';

    public function index()
    {
        return $expense = Expense::all();
    }

    public function store(ExpenseRequest $request)
    {
        return $expense = Expense::create($request->all());
    }

    public function show($id)
    {
        if ($expense  = Expense::find($id)) {
            return $expense;
        }
        return response()->json(['message' => 'No Expense found!'], 404);
    }

    public function update(ExpenseRequest $request, $id)
    {
        $expense = Expense::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Expense is Updated!'], 200);
    }

    public function destroy($id)
    {
        return "Expense is Deleted";
    }
}
