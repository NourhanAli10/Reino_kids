<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all_products()
    {
        $products = Product::all();
        return response()->json($products);
    }


    public function new_products()
    {
        $new_products = Product::orderBy('created_at', 'desc')->get();
        return response()->json($new_products);
    }


    public function Best_selling()
    {

    }


    public function offers()
    {
        
    }
}
