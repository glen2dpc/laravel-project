<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;


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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/create', [SaleController::class, 'create'])->name('create');

route::post('/', [SaleController::class, 'store'])->name('store');

Route::get('/{id}/edit', [SaleController::class, 'edit'])->name('edit');

Route::post('/{id}', [SaleController::class, 'update'])->name('update');

Route::get('/{id}', [SaleController::class, 'destroy'])->name('destroy');
