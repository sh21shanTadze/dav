<?php

use App\Http\Controllers\CarsController;
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

Route::get('/', [CarsController::class, 'index'])->name('home');
Route::get('/add/car', [CarsController::class, 'add'])->name('add.car');
Route::get('/edit/car/{car}', [CarsController::class, 'edit'])->name('edit.car');
Route::post('/create/car', [CarsController::class, 'store'])->name('car.create');
Route::post('/update/car/{car}', [CarsController::class, 'update'])->name('car.update');
Route::post('/delete/car/{car}', [CarsController::class, 'delete'])->name('car.delete');
