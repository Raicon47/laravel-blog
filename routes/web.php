<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::middleware('guest')->group(function() {
  Route::get('/', [BlogController::class, 'index']);
  Route::get('/post{slug}', [BlogController::class, 'show'])->name('show');
  Route::get('/topic/{slug}', [BlogController::class, 'topic'])->name('topic');
});
