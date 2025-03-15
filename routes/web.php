<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibleController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\DevotionController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/bible', [BibleController::class, 'index']);
Route::get('/bible/{verse}', [BibleController::class, 'show']);

Route::get('/study', [StudyController::class, 'index']);
Route::get('/study/{study}', [StudyController::class, 'show']);

Route::get('/devotion', [DevotionController::class, 'index']);
Route::get('/devotion/{devotion}', [DevotionController::class, 'show']);

Route::get('/about', [AboutController::class, 'index']);
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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

