<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
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
Route::get('/index', [BookController::class, 'index']);
Route::get('/index/{id}', [BookController::class, 'show_books']);
Route::get('/categories/{id}', [CategoryController::class, 'show_categories']);
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/', function () {
    return redirect('/index');
});
