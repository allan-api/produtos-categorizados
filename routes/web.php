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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect()->route('products');
});

Route::get('/products', [ProductController::class, 'index'])->name("products"); //lista
Route::get('/product', [ProductController::class, 'create'])->name("product"); //cria
Route::get('/product/{id}', [ProductController::class, 'edit'])->name("product_edit"); //edita 
Route::post('/product', [ProductController::class, 'store']);
Route::post('/product/{id}', [ProductController::class, 'update']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);


Route::get('/categories', [CategoryController::class, 'index'])->name("categories");  //lista
Route::get('/category', [CategoryController::class, 'create'])->name("category");  //cria
Route::get('/category/{id}', [CategoryController::class, 'edit'])->name("category_edit");  //edita
Route::post('/category', [CategoryController::class, 'store']);
Route::post('/category/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
