<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => false
    ]);
    Route::get('/', fn() => redirect('/admin/dashboard'));
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
