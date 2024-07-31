<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\traitementform ;
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
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/afficher',[traitementform::class,'afficher']);

Route::get('add',[traitementform::class,'inserer']);

// supprimer:
Route::get('delete',[traitementform::class,'delete']);
// edit:
Route::get('edit',[traitementform::class,'selectedit']);
Route::get('savedata',[traitementform::class,'savedata']);
