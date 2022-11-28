<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\TransactionController;

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

//public routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//public route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('/concert', [ConcertController::class, 'index']);
Route::get('/concert/{id}', [ConcertController::class, 'show']);
//Route::post('/concert', [ConcertController::class, 'store']);
//Route::put('/concert/{id}', [ConcertController::class, 'update']);
//Route::delete('/concert/{id}', [ConcertController::class, 'destroy']);

Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction{id}', [TransactionController::class, 'show']);
//Route::post('/transaction', [TransactionController::class, 'store']);
//Route::put('/transaction/{id}', [TransactionController::class, 'update']);
//Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']);

//protected routes
Route::resource('concert', ConcertController::class)->except(
    ['create', 'edit']
);
Route::post('/logout', [AuthController::class, 'logout']);
Route::resource('transaction', TransactionController::class)->except(
    ['create', 'edit']
);