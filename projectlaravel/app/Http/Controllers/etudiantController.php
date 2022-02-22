<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
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
    public function edit($id)
    {
        $data = \DB::select("SELECT * FROM etudiants WHERE id= ?",[$id]);
        $etudiant = $data[0];
        return view('edit_etudiant', \compact('etudiant'));
    }
    public function update(Request $request)
    {
        \DB::update("UPDATE etudiants set noms = ?, age = ? WHERE id= ?",[$request->noms,$request->age,$request->id]);
    }
}
