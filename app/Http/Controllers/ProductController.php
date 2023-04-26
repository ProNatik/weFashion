<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->get();
        // with(['size', 'quantity'])->orderBy('created_at', 'desc')->get();
        return view('home', ['title' => 'myProducts', 'products' => $products]);
    }
}
