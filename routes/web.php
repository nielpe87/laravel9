<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
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
/*
Route::get('/users', [ UserController::class, "index" ] )->name('users.index');
Route::get('/users/create', [ UserController::class, "create" ] )->name('users.create');
Route::post('/users', [ UserController::class, "store" ] )->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, "edit"] )->name('users.edit');
Route::put('/users/{id}', [UserController::class, "update"] )->name('users.update');
Route::delete('/users/{id}', [UserController::class, "destroy"] )->name('users.destroy');
*/

Route::resource("/users", UserController::class);
Route::resource("/products", ProductController::class);
