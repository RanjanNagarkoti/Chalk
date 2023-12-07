<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProudctRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(Product $product)
    {
        return view('products.create', compact('product'));
    }

    public function store(Product $product, StoreProductRequest $request)
    {
        $validated = $request->validated();

        $product = $product->create($validated);

        return redirect()->route('products.show', ['product' => $product]);
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product, UpdateProudctRequest $request)
    {
        $validated = $request->validated();

        $product->update($validated);

        return redirect()->route('products.show', ['product' => $product]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        
        return to_route('products.index');
    }
}
