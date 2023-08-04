<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('test', [TestController::class, 'index'])->name('test.index');
Route::get('test/{post}', [TestController::class, 'show'])->name('test.show');
Route::get('article', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/{post}', [ArticleController::class, 'show'])->name('article.show');
