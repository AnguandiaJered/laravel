<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class GenericController extends Controller
{
    public function index()
    {
        $data=Animal::all();
        dd($data);
    }
    public function store(Request $request)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }

}
