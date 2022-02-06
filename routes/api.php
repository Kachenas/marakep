<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('customer', 'CustomerController');
Route::resource('supplier', 'SupplierController');
Route::resource('product', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('expense', 'ExpenseController');
Route::resource('navigation', 'NavigationController');
Route::resource('user-location', 'UserLocationController');
Route::resource('user-navigation', 'UserNavigationController');

