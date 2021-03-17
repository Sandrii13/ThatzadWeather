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
    return view('principal');
});

Route::get('/weather', function (){
    return view('detalle');
})->name('detalles');

//Route::post('/ajax', [App\Http\Controllers\PrincipalController::class, 'index'])->name('ajax');
Route::get('/get', [App\Http\Controllers\PrincipalController::class, 'top'])->name('get');
Route::get('/show', [App\Http\Controllers\PrincipalController::class, 'show'])->name('show');
Route::match(array('GET','POST'),'/ajax', [App\Http\Controllers\PrincipalController::class, 'index'])->name('ajax');
