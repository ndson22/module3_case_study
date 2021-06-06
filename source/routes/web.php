<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\CollaboratorController;


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
    return view('home');
})->name('home.index');

Route::prefix('/customer')->group(function () {
    Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
    Route::post('/login', [CustomerController::class, 'verify'])->name('customer.verify');
    Route::get('/logout', [CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/register', [CustomerController::class, 'register'])->name('customer.register');
    Route::post('/register', [CustomerController::class, 'store'])->name('customer.store');
});

Route::prefix('/collaborators')->group(function () {
    // Các route làm việc với food
    Route::prefix('/foods')->group(function () {
        Route::get('/index', [CollaboratorController::class, 'index'])->name('collaborators.foods.index');
        Route::get('/create', [CollaboratorController::class, 'createFood'])->name('collaborators.foods.create');
        Route::post('/create', [CollaboratorController::class, 'storeFood'])->name('collaborators.foods.store');
        Route::get('/delete/{food_id}/{page}', [CollaboratorController::class, 'deleteFood'])->name('collaborators.foods.delete');
    });
    // Các route làm việc với nhà hàng
    Route::prefix('/restaurants')->group(function () {
        Route::get('/districts/{city_id}', [CollaboratorController::class, 'getDistricts'])->name('collaborators.restaurants.districts');
        Route::get('/communes/{district_id}', [CollaboratorController::class, 'getCommunes'])->name('collaborators.restaurants.communes');
        Route::get('/create', [CollaboratorController::class, 'createRestaurant'])->name('collaborators.restaurants.create');
        Route::post('/create', [CollaboratorController::class, 'storeRestaurant'])->name('collaborators.restaurants.store');
        // Tìm kiếm nhà hàng theo ID và các món ăn tương ứng. 20 món ăn 1 trang
        Route::get('/{restaurant_id}/{page}', [CollaboratorController::class,'getRestaurant'])->name('collaborators.restaurant.get');
    });
});


