<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/panasz/310697/{person_id}/create',[PersonController::class, 'creating'])->name('person.creating');

Route::put('/panasz/310697/{person_id}/edit',[PersonController::class, 'editing'])->name('person.editing');

Route::delete('/panasz/310697/{person_id}/delete',[PersonController::class, 'deleting'])->name('person.deleting');

Route::get('/panasz/310697/get',[PersonController::class, 'getting'])->name('person.getting');

Route::get('/panasz/310697/{person_id}/get',[PersonController::class, 'getting_one'])->name('person.getting_one');