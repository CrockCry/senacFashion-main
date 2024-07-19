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

// Rota para o dashboard
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/show', [DashController::class, 'show'])->name('dashboard.show');
Route::get('/dashboard/create', [DashController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard', [DashController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{id}/edit', [DashController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{id}', [DashController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{id}', [DashController::class, 'destroy'])->name('dashboard.destroy');
Route::put('/dashboard/{id}/toggle-status', [DashController::class, 'toggleStatus'])->name('dashboard.toggleStatus');


// Rota para a página de News (desfile)
Route::get('/dashboard/news', [DashController::class, 'news'])->name('dashboard.news');
// Adicione as outras rotas necessárias para o CRUD
Route::resource('dashboard', DashController::class);
// Rota para alternar o status do estilista
Route::put('dashboard/toggleStatus/{id}', [DashController::class, 'toggleStatus'])->name('dashboard.toggleStatus');

// Rotas para banners
Route::get('dashboard/createBanner', [DashController::class, 'createBanner'])->name('dashboard.createBanner');
Route::post('dashboard/storeBanner', [DashController::class, 'storeBanner'])->name('dashboard.storeBanner');
Route::get('dashboard/editBanner/{id}', [DashController::class, 'editBanner'])->name('dashboard.editBanner');
Route::put('dashboard/updateBanner/{id}', [DashController::class, 'updateBanner'])->name('dashboard.updateBanner');
Route::delete('dashboard/destroyBanner/{id}', [DashController::class, 'destroyBanner'])->name('dashboard.destroyBanner');
Route::put('dashboard/toggleStatusBanner/{id}', [DashController::class, 'toggleStatusBanner'])->name('dashboard.toggleStatusBanner');
