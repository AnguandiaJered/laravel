<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EtudiantController;

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

Route::post('/new_etudiant', [ EtudiantController::class,'store' ]);

Route::get('/products', [ EtudiantController::class,'index']);
Route::get('/edit_etudiant/{id}', [ EtudiantController::class,'edit']);
Route::post('/edit_etudiant', [ EtudiantController::class,'update']);
