<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController; 
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home',[PageController::class,"view_page"])->name("view_page");
Route::get("/view_product",[ProductController::class,"all_product"])->name("all_product");
Route::get("/add_product",[ProductController::class,"add_product"])->name("add_product");
Route::post("/product_add",[ProductController::class,"product_add"])->name("product_add");
Route::get("/update_product/{id}",[ProductController::class,"update_product"])->name("update_product");
Route::post("/product_update",[ProductController::class,"product_update"])->name("product_update");


Route::get("/add_catigory",[CatigoryController::class,"add_catigory"])->name("add_catigory");
Route::post("/catigory_add",[CatigoryController::class,"catigory_add"])->name("catigory_add");

