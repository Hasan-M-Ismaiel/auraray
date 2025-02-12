<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainHomeController extends Controller
{

    public function home(Request $request)
    {
        $products = Product::inRandomOrder()->paginate(6); // Fetch products once

        if ($request->ajax()) {
            return view('includes.data', compact('products'));
        }

        return view('main_home', compact('products'));
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
        $inputs = $request->only(['category', 'type', 'size', 'flavor', 'extract']);
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

    public function service_1()
    {
        return view('service-details-1');
    }

    public function service_2()
    {
        return view('service-details-2');
    }

    public function service_3()
    {
        return view('service-details-3');
    }
}
