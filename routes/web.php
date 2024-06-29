<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

// Get, Post, Put, Patch and Delete (method http)

// list-product: Ten duong dan
Route::get('test', function(){
    echo "Thuy Linh";
});
Route::get('/', function(){
    echo "Home";
});
Route::get('list-product', [ProductController::class, 'showProduct']);

// truyền dữ liệu từ Route => Controller

// Slug
// http://127.0.0.1:8000/get-product/3 
// Nen dung trong truong hop truyen 1 bien
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=3&name=iphone
// Nen dung trong truong hop truyen nhieu bien
Route::get('update-product', [ProductController::class, 'updateProduct']);

Route::get('list-student', [StudentController::class, 'showStudent']);
