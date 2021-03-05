<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoronaController;

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

//Route::resource('coronas', 'CoronaController'); //db+controller

Route::get('coronas', [CoronaController::class,'index'])->name('coronas.index');
Route::get('coronas/create', [CoronaController::class,'create'])->name('coronas.create');//add record
Route::post('coronas', [CoronaController::class,'store'])->name('coronas.store');//keep record
Route::get('coronas/{id}', [CoronaController::class,'show'])->name('coronas.show');//display selected record
Route::get('coronas/edit/{id}', [CoronaController::class,'edit'])->name('coronas.edit');
Route::put('coronas/{id}', [CoronaController::class,'update'])->name('coronas.update');
Route::delete('coronas/{id}', [CoronaController::class,'destroy'])->name('coronas.destroy');