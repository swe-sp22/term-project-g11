<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;

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

# register
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

# login
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

# logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['AuthCheck']], function(){
    # homepage
    Route::get('/', [UserController::class, 'home'])->name('homePage');
    # login & register view
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/admin/index', [adminController::class, 'index'])->name('adminRoute');
    # company
    # jobSeeker
});

//add new company route
Route::get('/admin/addNewCompany', [adminController::class, 'add'])->name('addCompanyForm');

//Store form data in DB route
Route::post('/admin/addNewCompany', [adminController::class, 'store'])->name('addCompany.action');

//Delete Company From DB route
Route::get('delete/{name?}', [adminController::class, 'destroy'])->name('removeCompany.action');