<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

# homepage
Route::get('/', [UserController::class, 'home'])->name('homePage');

# register
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

# login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');