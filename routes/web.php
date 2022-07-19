<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
});

Route::get('/dashboard', [PageController::class, 'show'])->name('dashboard');
Route::get('/admins', [PageController::class, 'show'])->name('admins');
Route::get('/content-editors', [PageController::class, 'show'])->name('content-editors');
Route::get('/regular-users', [PageController::class, 'show'])->name('regular-users');

require __DIR__.'/auth.php';
