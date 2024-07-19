<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\DesfileController;
use App\Http\Controllers\EstilistaController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/desfile', [DesfileController::class, 'index'])->name('desfile');

Route::get('/estilista', [EstilistaController::class, 'index'])->name('estilista');

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/create', [DashController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard', [DashController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{id}/edit', [DashController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{id}', [DashController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{id}', [DashController::class, 'destroy'])->name('dashboard.destroy');    
