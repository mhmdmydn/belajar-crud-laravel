<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;

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

Route::resource('article', 'App\Http\Controllers\HomeController');
Route::resource('/', 'App\Http\Controllers\PhotoController');

/*
* Route Biasa
*/

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/article/create/', [HomeController::class, 'create']);
// Route::get('/article/{title}/', [HomeController::class, 'article']);
// Route::post('/article', [HomeController::class, 'store']);
// Route::get('/article/{id}/edit', [HomeController::class, 'edit']);
// Route::put('/article/{id}', [HomeController::class, 'update']);
// Route::delete('/article/{id}', [HomeController::class, 'delete']);
