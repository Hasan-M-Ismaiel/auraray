<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('products.index',[
            'products'=>Product::latest()->filter(
                request(['search'])
                )->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Product $Product){
        return view('products.show',[
            'product' => $Product
        ]);
    }
}