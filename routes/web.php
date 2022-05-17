<?php

use App\Http\Controllers\PrintsController;
use App\Http\Controllers\SalesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sales', [SalesController::class, 'index']);
Route::get('/prints', [PrintsController::class, 'index']);
Route::get('/customers', [CustomersController::class, 'index']);
