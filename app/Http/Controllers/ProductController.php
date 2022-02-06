    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public $products = '';

    public function index()
    {
        return $products = Product::all();
    }

    public function store(ProductRequest $request)
    {
        return $products = Product::create($request->all());
    }

    public function show($id)
    {
        if ($products  = Product::find($id)) {
            return $products;
        }
        return response()->json(['message' => 'No Product found!'], 404);
    }

    public function update(ProductRequest $request, $id)
    {
         $products = Product::findOrFail($id)->update($request->all());
        return response()->json(['message' => 'Product is Updated!'], 200);
    }

    public function destroy($id)
    {
        return "Product is Deleted";
    }
}
