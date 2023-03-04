<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('pages.product.index', compact('products'));
    }

    public function create() {
        return view('pages.product.create');
    }

    public function store(Request $request) {
        Product::create($request->all());
        return back();
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('pages.product.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());

        return back();
    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();

        return back();
    }
}
