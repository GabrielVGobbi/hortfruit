<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');

Route::get('/{categoria}', [App\Http\Controllers\Web\HomeController::class, 'categorias'])->name('categorias');


Route::prefix('painel')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Painel\HomeController::class, 'index'])->name('painel.home');
    /*
    |--------------------------------------------------------------------------
    | Produtos
    |--------------------------------------------------------------------------
    */
    Route::prefix('products')->group(function () {
        Route::get('/', [App\Http\Controllers\Painel\ProductsController::class, 'index'])->name('products');
        Route::get('/create', [App\Http\Controllers\Painel\ProductsController::class, 'create'])->name('products.create');
        Route::post('/create', [App\Http\Controllers\Painel\ProductsController::class, 'store'])->name('products.store');
        Route::get('/{id}', [App\Http\Controllers\Painel\ProductsController::class, 'show'])->name('products.show');
        Route::put('/{id}/update', [App\Http\Controllers\Painel\ProductsController::class, 'update'])->name('products.update');
        Route::get('/{id}/delete', [App\Http\Controllers\Painel\ProductsController::class, 'destroy'])->name('products.destroy');
    });
});



