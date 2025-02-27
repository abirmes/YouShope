<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view( 'products' , [ 'products' => $products ] );

    }

    public function create(Request $request)
    {
        

        $product = Product::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'image' => $request->image,
            'categorie_id' =>$request->categorie
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
