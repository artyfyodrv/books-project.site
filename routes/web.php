<?php

use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Index\IndexFeedbackController;
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

// Авторизация
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

/**
 * Feedback system
 **/
// Фидбэк админ
Route::get('/admin', [AdminPanelController::class, 'showAdminPanel'])->name('admin-panel');
Route::get('/admin/feedback', [FeedbackController::class, 'showList'])->name('feedback-list');
// Фидбэк главная
Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback-form');
Route::post('/feedback', [FeedbackController::class, 'sendMessage'])->name('feedback-msg');

