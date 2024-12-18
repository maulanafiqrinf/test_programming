<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
|
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will 
| be assigned to the "web" middleware group. Make something great! 
|
*/

Route::get('/', function () {
    return view('login');
});
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'authenticationLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
