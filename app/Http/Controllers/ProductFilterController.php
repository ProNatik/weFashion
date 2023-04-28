<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductFilterController extends Controller
{
    public function show($category): View
    {
        $products = Product::where('category_id', $category)->orderBy('created_at', 'desc')->simplePaginate(6);
        $quantity = Product::where('category_id', $category)->count();
        return view('home', ['title' => 'myProducts', 'products' => $products, 'quantity' => $quantity]);
    }
}
