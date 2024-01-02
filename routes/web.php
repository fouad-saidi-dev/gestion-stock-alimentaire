<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StockController;
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
    return view('welcome');
});

//Route::resource('/products',ProductController::class);
/* Route::post('/add-product',[ProductController::class,'store'])->name('products.add');
Route::get('/products',[ProductController::class,'index']);
Route::get('/add', function () {
    return view('products.add-product');
});
Route::resource('/stock',StockController::class);
Route::match(['get','post'],'/recipes/validate',[RecipeController::class,'validateRecipe'])->name('recipe.store');
Route::view('/add-recipe','validate-recipe');
Route::get('/recipes/possible', [RecipeController::class,'getPossibleRecipes']); */
