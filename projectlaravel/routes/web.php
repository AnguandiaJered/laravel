<?php

use Illuminate\Support\Facades\Route;

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