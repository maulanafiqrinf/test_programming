<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------- 
| API Routes
|-------------------------------------------------------------------------- 
|
| Here is where you can register API routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will 
| be assigned to the "api" middleware group. Make something great! 
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});
Route::post('/login', App\Http\Controllers\LoginController::class)->name('login');

Route::post('/register', App\Http\Controllers\RegisterController::class)->name('register');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('contents', [ContentController::class, 'index']);
    Route::post('contents', [ContentController::class, 'store']);
    Route::get('contents/{id}', [ContentController::class, 'show']);
    Route::put('contents/{id}', [ContentController::class, 'update']);
    Route::delete('contents/{id}', [ContentController::class, 'destroy']);
});
