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
Route::get('/todo',[App\Http\Controllers\TodoController::class,'index']);
Route::get('/add_todo',[App\Http\Controllers\TodoController::class,'addTodo']);
Route::post('/add_todo',[App\Http\Controllers\TodoController::class,'storeTodo']);
Route::post('/delete-todo/{iddelete}',[App\Http\Controllers\TodoController::class,'deleteTodo']);
Route::get('/product',[App\Http\Controllers\ProductController::class,'abc']);
Route::get('/addproduct',[App\Http\Controllers\ProductController::class,'addProduct']);
Route::post('/addproduct',[App\Http\Controllers\ProductController::class,'storeProduct']);
Route::post('/deleteproduct/{id}',[App\Http\Controllers\ProductController::class,'deleteProduct']);