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

/*Route::get('/person',[PersonController::class,'index'])->name('person.index');

Route::get('/panasz/310697/people',[PersonController::class,'showData'])->name('person.showData');
Route::get('/panasz/310697/people/{person_id}/',[PersonController::class,'showData_specific'])->name('person.showData_specific');

Route::get('/panasz/310697/create',[PersonController::class,'create'])->name('person.create');
Route::post('/panasz/310697/',[PersonController::class,'store'])->name('person.store');

Route::get('/panasz/310697/people/{person_id}/edit',[PersonController::class,'edit'])->name('person.edit');
Route::put('/panasz/310697/people/{person_id}/update',[PersonController::class,'update'])->name('person.update');

Route::get('/panasz/310697/people/{person_id}/delete',[PersonController::class,'delete'])->name('person.delete');
Route::delete('/panasz/310697/people/{person_id}/delete_conf',[PersonController::class,'delete_conf'])->name('person.delete_conf');
*/