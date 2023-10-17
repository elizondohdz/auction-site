<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
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

Route::get('/', fn () => to_route('item.index'))->name('home');
Route::get('login', fn () => to_route('auth.create'))->name('login');

Route::resource('auth', AuthController::class)
    ->only(['create', 'store']);

Route::delete('logout', fn () => to_route('auth.destroy')->name('logout'));
Route::delete('auth', [AuthController::class, 'destroy'])
    ->name('auth.destroy');

Route::resource('user', UserController::class)
    ->only('create', 'store');
Route::resource('item', ItemController::class);
Route::resource('item.bid', BidController::class)
    ->only(['store']);
