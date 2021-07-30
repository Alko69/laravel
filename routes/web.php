<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\BookController;

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

Route::get('/', [NavController::class, 'home']);

Route::get('/bookList', [NavController::class, 'bookList']);

Route::get('/contact', [NavController::class, 'contact']);

Route::get('/addBook', [NavController::class, 'addBook']);

Route::get('/book1', [BookController::class, 'getBookInfos']);

