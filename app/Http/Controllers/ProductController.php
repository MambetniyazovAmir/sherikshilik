<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'barcode' => 'required|string',
            'name' => 'required|string',
            'artikul' => 'required|string',
            'quantity' => 'required|integer',
            'buy_price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'import_id' => 'required|integer'
        ]);
        Product::create($validatedData);
        return redirect()->back();
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'barcode' => 'required|string',
            'name' => 'required|string',
            'artikul' => 'required|string',
            'quantity' => 'required|integer',
            'buy_price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'import_id' => 'required|integer'
        ]);
        $product->update($validatedData);
        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect() - back();
    }
}
