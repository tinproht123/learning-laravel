<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FallbackController;

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

// Route::get('/blogs', [PostsController::class, 'index']);

Route::prefix('/blogs')->group(function() {
    Route::get('/create', [PostsController::class, 'create'])->name('blogs.create');
    Route::post('/', [PostsController::class, 'store'])->name('blogs.store');
    Route::get('/', [PostsController::class, 'index'])->name('blogs.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blogs.show');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blogs.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blogs.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blogs.destroy');
});

//Route::match(['GET', 'POST'], '/blogs', [PostsController::class, 'index']);

Route::get('/', HomeController::class);

Route::fallback(FallbackController::class);
