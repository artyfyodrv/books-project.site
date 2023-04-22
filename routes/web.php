<?php

use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Index\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'showIndex'])->name('index');

Route::group([], function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group([], function (){
    Route::get('admin', [AdminPanelController::class, 'showAdminPanel']);
});
