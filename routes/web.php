<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Models\Admin;
use App\Models\Toko;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('posts');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// middleware('auth');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/admin', function () {
    return view('dashboard.admin.index');
})->middleware('auth');


// * ADMIN 1 == SUPER ADMIN can control everything
// * ADMIN 2 == ADMIN TOKO  only can do crud toko


Route::group(['middleware' => ['auth','HasRole:0']], function(){
    Route::resource('/dashboard/user', UserController::class);
});

Route::group(['middleware' => ['auth','HasRole:0,1']], function(){
    Route::resource('/dashboard/toko', TokoController::class);
    Route::get('/dashboard/user/{id}/change-pass', [UserController::class, 'changePassword']);
    Route::post('/dashboard/user/{id}/change-pass', [UserController::class, 'changePasswordHandler']);
    
});
