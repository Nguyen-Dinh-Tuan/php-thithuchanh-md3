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
    return view('home');
});


Route::group(['prefix' => 'stores'], function () {
    Route::get('/',[\App\Http\Controllers\StoreController::class, 'index'])->name('stores.list');
    Route::get('/create',[\App\Http\Controllers\StoreController::class, 'create'])->name('stores.create');
    Route::post('/create', [\App\Http\Controllers\StoreController::class, 'store'])->name('stores.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\StoreController::class, 'edit'])->name('stores.edit');
    Route::post('/{id}/edit', [\App\Http\Controllers\StoreController::class,'update'])->name('stores.update');
    Route::get('/{id}/delete', [\App\Http\Controllers\StoreController::class, 'delete'])->name('stores.delete');
    Route::get('/search', [\App\Http\Controllers\StoreController::class, 'search'])->name('stores.search');
});

