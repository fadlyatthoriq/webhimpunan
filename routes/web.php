<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/strukturorganisasi', [IndexController::class, 'struktur'])->name('struktur');

Route::get('/post/{slug}', [IndexController::class, 'showBySlug'])->name('slug');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
