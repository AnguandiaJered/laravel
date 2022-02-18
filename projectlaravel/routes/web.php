<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    $product=['Ordinateur','Clavier','Souris','Imprimante'];
    return view('products', compact('product'));
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/categorie', function () {
    $catego=['Machines','Cables','Ets'];
    return view('categorie',compact('catego'));
});
Route::get('/new_etudiant', function () {
    return view('new_etudiant');
})->name('new_etudiant');

Route::post('/store_etudiant', function (Request $request) {

    \DB::table('etudiants')->insert([
        'noms'=>$request->noms,
        'age' =>$request->age
    ]);
})->name('store_etudiant');
