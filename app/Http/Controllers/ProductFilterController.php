<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductFilterController extends Controller
{
    public function show($category): View
    {
        $products = Product::where('category_id', $category)->orderBy('created_at', 'desc')->simplePaginate(6);
        $quantity = Product::where('category_id', $category)->count();
        return view('home', ['title' => 'Products', 'products' => $products, 'quantity' => $quantity]);
    }

    public function solde(): View
    {
        $products = Product::where('state', 'solde')->simplePaginate(6);
        return view('home', ['title' => 'productsSolde', 'products' => $products]);
    }
}
