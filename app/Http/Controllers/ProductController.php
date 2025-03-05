<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function showAll()
    {
        $products = Product::all();
        return view('welcome', ['products' => $products]);
    }
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->titre,
                "quantity" => 1,
                "price" => $product->prix,
                "description" => $product->description
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function create(Request $request)
    {


        $product = Product::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => $request->image,
            'categorie_id' => $request->categorie
        ]);

        return redirect()->back();
    }

    public function delete(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
