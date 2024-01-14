<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',[PersonController::class,'index'])->name('person.index');

Route::get('/person/showData',[PersonController::class,'showData'])->name('person.showData');
Route::get('/person/showData/{person_id}/',[PersonController::class,'showData_specific'])->name('person.showData_specific');

Route::get('/person/create',[PersonController::class,'create'])->name('person.create');
Route::post('/person',[PersonController::class,'store'])->name('person.store');

Route::get('/person/showData/{person_id}/edit',[PersonController::class,'edit'])->name('person.edit');
Route::put('/person/showData/{person_id}/update',[PersonController::class,'update'])->name('person.update');

Route::get('/person/showData/{person_id}/delete',[PersonController::class,'delete'])->name('person.delete');
Route::delete('/person/showData/{person_id}/delete_conf',[PersonController::class,'delete_conf'])->name('person.delete_conf');