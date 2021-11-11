<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
})->name('home');

Auth::routes();

# Logout by get
Route::get('/logout', [ProfileController::class, 'logout'])->name('logout.auth');

# Ruta de Perfil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.update');
Route::put('/profile/{user}', [ProfileController::class, 'update']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

