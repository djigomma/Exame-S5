<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReferentielController;
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

// Route::resource("/re", ReferentielController::class);
// Route::post('/re', ReferentielController::class, 'index')->name('formation.index');
Route::get('/formation', [FormationController::class, 'index']);
Route::post('/formation/store' , [FormationController::class, 'store'])->name('ajoutF');
Route::get('/formation/create', [FormationController::class, 'create']);

Route::get('/candidat', [CandidatController::class, 'index']);
Route::get('/candidat/create', [CandidatController::class, 'create']);
Route::post('/candidat/store' , [CandidatController::class, 'store'])->name('ajoutE');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/referentiel', [ReferentielController::class, 'index']);
Route::get('/referentiel/create', [ReferentielController::class, 'create']);
// Route::get("/re", function(){
//     return view('/referentiel/create', 'index');
// });

// Route::controller(App\Http\Controllers\ReferentielController::class ,function(){
//     Route::get("/re", "index");
// });

// Route::get('/re', [ReferentielController::class], 'index')->name("referentiel.create");




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);