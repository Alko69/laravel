<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::post('/addBook', [ActionController::class, 'addBook']);

Route::post('deleteBook', [ActionController::class, 'deleteBook']);

Route::get('book/{id}', [NavController::class, 'book']);

Route::get('editBook', [NavController::class, 'editBook']);

Route::post('editBook', [ActionController::class, 'editBook']);


// Route::get('/book1', [BookController::class, 'getBookInfos']);
