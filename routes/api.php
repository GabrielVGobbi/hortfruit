<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('products', function() {
    return Product::all();
});

Route::get('products/{id}', [App\Http\Controllers\Api\ApiProductsController::class, 'show'])->name('products.show');
Route::get('products', [App\Http\Controllers\Api\ApiProductsController::class, 'homeCategorie'])->name('products');

