<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EtudiantController;
use App\Models\Animal;
use App\Http\Controllers\UserController;
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

// Route::get('/master', function () {
//     return view('master');
// });
// Route::get('/categorie', function () {
//     $catego=['Machines','Cables','Ets'];
//     return view('categorie',compact('catego'));
// });
// Route::get('/new_etudiant', function () {
//     return view('new_etudiant');
// })->name('new_etudiant');

// Route::post('/store_etudiant', [ EtudiantController::class,'store' ])->name('store_etudiant');

// Route::get('/etudiants', [ EtudiantController::class,'index'])->name('etudiants');
// Route::get('/edit_etudiant/{id}', [ EtudiantController::class,'edit'])->name('edit_etudiant');
// Route::post('/update_etudiant', [ EtudiantController::class,'update'])->name('update_etudiant');
// Route::get('/delete_etudiant/{id}', [ EtudiantController::class,'destroy'])->name('delete_etudiant');

Route::get('/animals',function(){
    $data =Animal::all();
    dd($data);
});

Route::post('/store',function(Request $request){
   Animal::create([
        'name'=>$request->name,
        'eapace'=>$request->eapace
    ]);
   
})->name('store');

// Animal::delete($id);
// Animal::find($id);
// Animal::where('id',$id)->update([
//     'name'=>$request->name,
//     'eapace'=>$request->eapace 
// ])

Route::get('/login', [ UserController::class,'index'])->name('login');
Route::post('/authenticate', [ UserController::class,'authenticate'])->name('authenticate');