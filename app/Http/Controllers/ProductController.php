<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function store(Product $product, Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        dd($request->all());
        // $product->create($request->all);
    }
}
