<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FallbackController;

//ADMIN CONTROLLER
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('register')->group(function() {
    Route::get('/', [RegistrationController::class, 'index'])->name('registration.index');
    Route::post('/', [RegistrationController::class, 'register'])->name('registration.register');
});

Route::prefix('login')->group(function() {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/', [LoginController::class, 'login'])->name('login.login');
});

Route::post('/logout', [LogoutController::class, 'index'])->name('logout.index');

Route::resource('blogs', PostController::class);
Route::resource('categories', CategoryController::class);

Route::prefix('admin')->group(function() {
    Route::get('', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('categories', AdminCategoryController::class, ['as' => 'admin']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback([FallbackController::class, 'index']);