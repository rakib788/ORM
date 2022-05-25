<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Support\Facades\Route;

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
Route::resource('user', UserController::class);
Route::resource('user_details', UserDetailsController::class);
Route::resource('carts', CartsController::class);
Route::resource('packages',PackageController::class);
Route::resource('package_user', PackageUserController::class);
