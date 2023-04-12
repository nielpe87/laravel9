<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/authenticate", [AuthController::class, "authenticate"]);


Route::middleware('auth:sanctum')->group(function(){

    Route::get("/logout",  [AuthController::class, "logout"]);

    Route::apiResource("/users", UserController::class);

    /*
    Route::get("/users", [UserController::class, "index"]);
    Route::post("/users", [UserController::class, "store"]);
    Route::get("/users/{id}", [UserController::class, "update"]);
    Route::get("/users/{id}", [UserController::class, "destroy"]);j
    */
});
