<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Quantsize;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->simplePaginate(6);
        $quantity = Product::with('category')->count();


        return view('home', ['title' => 'myProducts', 'products' => $products, 'quantity' => $quantity]);
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id);

        return view('productDetail', ['title' => 'myProduct', 'product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('productCreate', ['title' => 'createProduct', 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->safe()->except(['size']));

        if ($product){
            $quantSizeValidate = $request->safe()->only(['size']);
            $quantsize = Quantsize::create([
                'prod_id' => $product->id,
                'size' => $quantSizeValidate['size'],
            ]);
        }
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('category')->find($id);
        $categories = Category::all();

        return view('productUpdate', ['title' => 'myProduct', 'product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->safe()->except(['size']));
        return redirect()->route('product.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
