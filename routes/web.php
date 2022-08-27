<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('authenticate', [\App\Http\Controllers\AuthController::class, 'authenticate']);
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');
Route::post('edit', [\App\Http\Controllers\DashboardController::class, 'edit'])->middleware('auth');
Route::get('delete/{id}', [\App\Http\Controllers\DashboardController::class, 'cancella'])->middleware('auth');
