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
        return view( 'categorie' , [ 'categories' => $categories ] );
    }

    public function create(Request $request)
    {
        $categorie = Categorie::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('/catupdate',['categorie' => $categorie]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        

        $categorie = Categorie::find($request->id);
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        $categorie->save();

        return redirect()->route('categorie');
        
    }

    public function delete(int $id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->back();
    }
}
