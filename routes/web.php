<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\CustomersController;
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

Route::get('/users', [UsersController::class, 'index']);
Route::get('/merch', [MerchController::class, 'index']);
Route::get('/purchases', [PurchasesController::class, 'index']);
Route::get('/customers', [CustomersController::class, 'index']);