<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('Home');
Route::get('/detail', [DetailController::class, 'index'])
    ->name('Detail');
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('Checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])
    ->name('Checkout-success');


Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('travel-package','TravelPackageController');
        Route::resource('gallery','GalleryController');
    });

    // Auth::routes(['verify'=>true]);
require __DIR__.'/auth.php';