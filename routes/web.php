<?php

use App\Http\Controllers\BookstoreController;
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

Route::get('/', [BookstoreController::class, "viewHome"]);
Route::get('/category/{id}', [BookstoreController::class, "viewCategory"]);
Route::get('/detail/{id}', [BookstoreController::class, "viewDetail"]);
Route::get('/contact', [BookstoreController::class, "viewContact"]);

