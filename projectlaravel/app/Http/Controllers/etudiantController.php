<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index(){
        $product= \DB::select("SELECT * FROM etudiants");
    return view('products', compact('product'));
    }

    public function store(Request $request){
        \DB::table('etudiants')->insert([
            'noms'=>$request->noms,
            'age' =>$request->age
        ]);
    }
}
