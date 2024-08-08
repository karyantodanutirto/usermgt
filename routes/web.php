<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name(name: 'home');
// Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/login', [UserController::class, 'users.login'])->name(name: 'login');
Route::post('/login', [UserController::class, 'users.loginPost'])->name(name: 'login.post');
Route::get('/registration', [UserController::class, 'users.registration'])->name(name: 'registration');
Route::post('/registration', [UserController::class, 'users.registrationPost'])->name(name: 'registration.post');
Route::get('/logout', [UserController::class, 'logout'])->name(name: 'logout');

// Route Code Dari Bang Fahri
// Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
// Route::get('/registration', [UserController::class, 'registration'])->name('registration');
// Route::post('/registration', [UserController::class, 'registrationPost'])->name('registration.post');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');