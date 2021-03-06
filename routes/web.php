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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('counter', 'counter')->name('counter');
Route::view('calculator', 'calculator')->name('calculator');
Route::view('/todo', 'todolist')->name('todo');
Route::view('cascading_dropdown', 'cascading-dropdown')->name('cascading_dropdown');
Route::view('product_search', 'product-search')->name('product_search');
Route::view('image_upload', 'image-upload')->name('image_upload');

require __DIR__.'/auth.php';
