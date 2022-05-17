<?php

use App\Http\Controllers\PrController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
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

Route::get('/sales', [SaleController::class, 'index']);
Route::get('/prints', [PrController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/pages', [PageController::class, 'index']);
