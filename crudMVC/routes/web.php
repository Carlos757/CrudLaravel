<?php

use App\Http\Controllers\ClienteController;
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
Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes/store', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('clientes/edit/{cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/update/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::post('/', [ClienteController::class, 'show'])->name('clientes.show');


