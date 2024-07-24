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
// Route::get('/dashboard/show', [DashController::class, 'show'])->name('dashboard.show');
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

// Rotas para edição de estilistas
Route::get('/dashboard/estilista/create', [DashController::class, 'create'])->name('dashboard.estilista.create');
Route::post('/dashboard/store', [DashController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{id}/edit', [DashController::class, 'edit'])->name('dashboard.estilista.edit');
Route::put('/dashboard/{id}', [DashController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{id}', [DashController::class, 'destroy'])->name('dashboard.destroy');
Route::put('/dashboard/toggleStatus/{id}', [DashController::class, 'toggleStatus'])->name('dashboard.toggleStatus');

// Rotas para banners
Route::get('/dashboard/banner/create', [DashController::class, 'createBanner'])->name('dashboard.bannerHome.createBanner');
Route::post('/dashboard/banner/store', [DashController::class, 'storeBanner'])->name('dashboard.storeBanner');
Route::get('/dashboard/banner/{id}/edit', [DashController::class, 'editBanner'])->name('dashboard.bannerHome.editBanner');
Route::put('/dashboard/banner/{id}', [DashController::class, 'updateBanner'])->name('dashboard.updateBanner');
Route::delete('/dashboard/banner/{id}', [DashController::class, 'destroyBanner'])->name('dashboard.destroyBanner');
Route::put('/dashboard/banner/toggleStatus/{id}', [DashController::class, 'toggleStatusBanner'])->name('dashboard.toggleStatusBanner');

// Rotas para desfiles
Route::get('/dashboard/desfile/create', [DashController::class, 'createDesfile'])->name('dashboard.createDesfile');
Route::post('/dashboard/desfile/store', [DashController::class, 'storeDesfile'])->name('dashboard.storeDesfile');
Route::get('/dashboard/desfile/{id}/edit', [DashController::class, 'editDesfile'])->name('dashboard.editDesfile');
Route::put('/dashboard/desfile/{id}', [DashController::class, 'updateDesfile'])->name('dashboard.updateDesfile');
Route::delete('/dashboard/desfile/{id}', [DashController::class, 'destroyDesfile'])->name('dashboard.destroyDesfile');
Route::put('/dashboard/desfile/toggleStatus/{id}', [DashController::class, 'toggleStatusDesfile'])->name('dashboard.toggleStatusDesfile');

// Rotas para fotos dos desfiles
Route::get('/dashboard/desfile/{desfileId}/foto/create', [DashController::class, 'createFotoDesfile'])->name('dashboard.createFotoDesfile');
Route::post('/dashboard/desfile/{desfileId}/foto/store', [DashController::class, 'storeFotoDesfile'])->name('dashboard.storeFotoDesfile');
Route::get('/dashboard/foto/{id}/edit', [DashController::class, 'editFotoDesfile'])->name('dashboard.editFotoDesfile');
Route::put('/dashboard/foto/{id}', [DashController::class, 'updateFotoDesfile'])->name('dashboard.updateFotoDesfile');
Route::delete('/dashboard/foto/{id}', [DashController::class, 'destroyFotoDesfile'])->name('dashboard.destroyFotoDesfile');
Route::put('/dashboard/foto/toggleStatus/{id}', [DashController::class, 'toggleStatusFotoDesfile'])->name('dashboard.toggleStatusFotoDesfile');

// Rota para news (desfiles)
Route::get('/dashboard/news', [DashController::class, 'news'])->name('dashboard.news');
