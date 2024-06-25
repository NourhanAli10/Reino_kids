<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() : View
    {
        $products = Product::all();
        return view('store.index', compact('products'));
    }

    public function newProducts()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return response()->json($products);
    }


    public function Offers()
    {
        $products = Product::all();

    }
}
