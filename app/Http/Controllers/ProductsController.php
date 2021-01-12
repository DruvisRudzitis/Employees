<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index', [
            'products' => (new Product)->all()

        ]);
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $product = (new Product())->fill($request->all());
        $product->user()->associate(auth()->user());
        $product->save();

        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }


    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.edit', $product);
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    public function transform(Product $product) {
        $jsonData = [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
        ];
        return $jsonData;
    }
}
