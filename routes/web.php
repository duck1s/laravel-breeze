<?php

use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources([
        'articles' => BlogAdminController::class,
    ]);
});

require __DIR__.'/auth.php';
