<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::resource('categories','App\Http\Controllers\CategoryController');
// Route::resource('products','App\Http\Controllers\ProductController');

Route::get('/categories', [CategoryController::class,'getCategories']);
Route::get('/categories', [CategoryController::class,'createCategories']);
Route::get('/categories/{categoryId}', 'App\Http\Controllers\CategoryController@getCategory');
Route::get('/categories/{categoryId}/edit', [CategoryController::class,'updateCategory']);
Route::get('/categories/{categoryId}/delete', [CategoryController::class,'deleteCategory']);
Route::get('/categories/{categoryId}/products', [ProductController::class,'getCategoryProducts']);

Route::get('/products', [ProductController::class,'getProducts']);
Route::get('/products', [ProductController::class,'createProduct']);
Route::get('/products/{product}', [ProductController::class,'getProduct']);
Route::get('/products/{product}/edit', [ProductController::class,'updateProduct']);
Route::get('/products/{product}/delete', [ProductController::class,'deleteProduct']);
