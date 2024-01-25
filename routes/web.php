<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get("register", [RegisterController::class, 'index'])->name('register');
Route::post("register", [RegisterController::class, 'store'])->name('register');
Route::get("login", [LoginController::class, 'index'])->name('login');
Route::post("login", [LoginController::class, 'store'])->name('login.store');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('adminpanel.index');
    Route::get('/table', [AdminController::class, 'table'])->name('adminpanel.table');
});


Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

