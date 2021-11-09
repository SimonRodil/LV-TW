<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateProfile;

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
# Ruta de Perfil

Route::get('/profile', function () {
    return view('auth.profile');
})->middleware('auth');

Route::put('/profile/{user}', [UpdateProfile::class, 'update'])->middleware('auth');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

