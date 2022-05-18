<?php

use App\Http\Controllers\PrController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CustomerController;
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

Route::controller(CustomerController::class)->group(function() {

    Route::prefix('customers')->group(function() {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{customer}', 'edit');
    });
    });

Route::controller(SaleController::class)->group(function() {
    
    Route::prefix('sales')->group(function() {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{sale}', 'edit');
    });
    });

Route::controller(PrController::class)->group(function() {
    
    Route::prefix('prs')->group(function() {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/show/{id}', 'show');
        Route::get('/edit{pr}', 'edit');
    });
    });