<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

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
        $data = $request->validated();
        
        $picture = $data['picture'];

        $extension = $data['picture']->extension();
        $unique = date('ymd') . time();
        $name = $unique . '.' . $extension;
        $data['picture'] = $name;

        $picture->storeAs('public/images', $name);
        $product->create($data);

        return to_route('products.index');
    }
}
