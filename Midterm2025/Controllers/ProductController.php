<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function purchase(Product $product) {
        $user = Auth::user();

        if ($user->credit < $product->price) {
            return back()->withErrors(['error' => 'Insufficient funds']);
        }

        if ($product->stock <= 0) {
            return back()->withErrors(['error' => 'Product out of stock']);
        }

        $user->credit -= $product->price;
        $user->save();

        $product->stock -= 1;
        $product->save();

        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);

        return redirect()->route('orders.index')->with('success', 'Purchase successful!');
    }
}
