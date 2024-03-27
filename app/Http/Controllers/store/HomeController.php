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
        // $products = Product::all();
        // $new_products = Product::orderBy('created_at', 'desc')->get();
        // return view('store.index', compact(['products', 'new_products']));
        return view('store.index');
    }
}
