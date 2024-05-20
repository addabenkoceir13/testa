<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboard\DashboardController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/{id}/edit/', [DashboardController::class, 'edit'])->name('dashboard.user.edit');
    Route::put('/user/{id}/update/', [DashboardController::class, 'update'])->name('dashboard.user.update');
    Route::post('/user/status', [DashboardController::class, 'change'])->name('dashboard.user.change');
    Route::delete('/user/delete', [DashboardController::class, 'destroy'])->name('dashboard.user.delete');
});

Route::prefix('public')->middleware(['auth'])->group( function() {
    Route::get('/', [HomeController::class, 'index']);
});
