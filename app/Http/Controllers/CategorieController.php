<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view( 'categories' , [ 'categories' => $categories ] );
    }

    public function create(Request $request)
    {
        $categorie = Categorie::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function delete(int $id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->back();
    }
}
