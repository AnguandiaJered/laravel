<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $etudiant= \DB::select("SELECT * FROM etudiants order by id DESC");
    return view('etudiants', compact('etudiant'));
    }

    public function store(Request $request){
        $request->validate([
            'noms'=>'required',
            'age' =>'required'
        ]);
        \DB::table('etudiants')->insert([
            'noms'=>$request->noms,
            'age' =>$request->age
        ]);

        // return back()->with('message','Inserer avec success');
        //return \redirect()->route('etudiants')->with('message','Inserer avec success');
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
        return \redirect()->route('etudiants')->with('message','modification reussi aec succes');;
    }
    public function destroy($id)
    {
      \DB::delete("DELETE FROM etudiants WHERE id= ?",[$id]);
 
      return \redirect()->route('etudiants')->with('message','suppression reussi aec succes');
    }
}
