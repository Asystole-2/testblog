<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BibleController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\DevotionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SignupController;
Route::get('/signup/success', function () {
    return view('signup-success');
})->name('signup.success');

Route::get('/', [HomeController::class, 'index']);

Route::get('/bible', [BibleController::class, 'index']);
Route::get('/bible/{verse}', [BibleController::class, 'show']);


Route::get('/study', [StudyController::class, 'index'])->name('study.index');
Route::get('/study/{study}', [StudyController::class, 'show'])->name('study.show');
Route::get('/devotions', [DevotionController::class, 'index'])->name('devotion.index');
Route::get('/devotions/{id}', [DevotionController::class, 'show'])->name('devotion.show');
Route::get('/get-involved', [SignupController::class, 'create'])->name('signup.create');
Route::post('/get-involved', [SignupController::class, 'store'])->name('signup.store');
Route::get('/signup/success', function () {
    return view('signup-success'); // Create this success page view
})->name('signup.success');
Route::get('/about', [AboutController::class, 'index'])->name('about');





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

