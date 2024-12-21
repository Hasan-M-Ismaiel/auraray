<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainHomeController extends Controller
{

    public function home(Request $request)
    {
        $products = Product::paginate(6);

        if ($request->ajax()) {
            return view('includes.data', compact('products'));
        }

        return view('main_home', [
            'products' => Product::latest()->paginate(6),
        ]);
    }

    public function showProduct(Product $product)
    {
        return view('product-details', [
            'product' => $product
        ]);
    }

    public function products(Request $request)
    {

        // Retrieve input fields and filter out 'null' strings
        $inputs = $request->only(['category', 'type', 'size', 'flavor']);
        foreach ($inputs as $key => $value) {
            if ($value === 'null' || is_null($value) || $value === '') {
                unset($inputs[$key]); // Remove invalid fields
            }
        }

        // Build the query dynamically
        $query = Product::query();

        foreach ($inputs as $field => $value) {
            $query->where($field, $value);
        }

        // Execute the query and paginate results
        $products = $query->paginate(6);

        return view('includes.data', compact('products'));
    }

    public function service()
    {
        return view('service-details');
    }
}