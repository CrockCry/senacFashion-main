<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DesfileController;
use App\Http\Controllers\EstilistaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/desfile', [DesfileController::class, 'index'])->name('desfile');
Route::get('/estilista', [EstilistaController::class, 'index'])->name('estilista');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// Rota para o dashboard
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/create', [DashController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard', [DashController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{id}/edit', [DashController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{id}', [DashController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{id}', [DashController::class, 'destroy'])->name('dashboard.destroy');
Route::put('/dashboard/{id}/toggle-status', [DashController::class, 'toggleStatus'])->name('dashboard.toggleStatus');


// Rota para a página de News (desfile)
Route::get('/dashboard/news', [DashController::class, 'news'])->name('dashboard.news');

// Rotas para banners
Route::get('/dashboard/banner/create', [HomeController::class, 'createBanner'])->name('dashboard.bannerHome.createBanner');
Route::post('/dashboard/banner/store', [HomeController::class, 'storeBanner'])->name('dashboard.storeBanner');
Route::get('/dashboard/banner/{id}/edit', [HomeController::class, 'editBanner'])->name('dashboard.bannerHome.editBanner');
Route::put('/dashboard/banner/{id}', [HomeController::class, 'updateBanner'])->name('dashboard.updateBanner');
Route::delete('/dashboard/banner/{id}', [HomeController::class, 'destroyBanner'])->name('dashboard.destroyBanner');
Route::put('/dashboard/banner/toggleStatus/{id}', [HomeController::class, 'toggleStatusBanner'])->name('dashboard.toggleStatusBanner');

// Rotas para estilistas
Route::get('/dashboard/estilista/create', [EstilistaController::class, 'createEstilista'])->name('dashboard.estilista.create');
Route::post('/dashboard/estilista', [EstilistaController::class, 'storeEstilista'])->name('dashboard.storeEstilista');
Route::get('/dashboard/estilista/{id}/edit', [EstilistaController::class, 'edit'])->name('dashboard.estilista.edit');
Route::put('/dashboard/estilista/{id}', [EstilistaController::class, 'update'])->name('dashboard.estilista.update');
Route::delete('/dashboard/estilista/{id}', [EstilistaController::class, 'destroy'])->name('dashboard.estilista.destroy');

// Rotas para desfiles
Route::get('/dashboard/desfile/create', [DesfileController::class, 'createDesfile'])->name('dashboard.desfile.createDesfile');
Route::post('/dashboard/desfile', [DesfileController::class, 'storeDesfile'])->name('dashboard.store');
Route::get('/dashboard/desfile/{id}/edit', [DesfileController::class, 'editDesfile'])->name('dashboard.desfile.editDesfile');
Route::put('/dashboard/desfile/{id}', [DesfileController::class, 'updateDesfile'])->name('dashboard.update');
Route::delete('/dashboard/desfile/{id}', [DesfileController::class, 'destroyDesfile'])->name('dashboard.destroy');
Route::put('/dashboard/desfile/{id}/toggle-status', [DesfileController::class, 'toggleStatusDesfile'])->name('dashboard.toggleStatus');

// Rotas para fotos dos desfiles
Route::get('/dashboard/desfile/{desfileId}/foto/create', [DesfileController::class, 'createFoto'])->name('dashboard.createFotoDesfile');
Route::post('/dashboard/desfile/{desfileId}/foto/store', [DesfileController::class, 'storeFoto'])->name('dashboard.storeFotoDesfile');
Route::get('/dashboard/foto/{id}/edit', [DesfileController::class, 'editFoto'])->name('dashboard.editFotoDesfile');
Route::put('/dashboard/foto/{id}', [DesfileController::class, 'updateFoto'])->name('dashboard.updateFotoDesfile');
Route::delete('/dashboard/foto/{id}', [DesfileController::class, 'destroyFoto'])->name('dashboard.destroyFotoDesfile');
Route::put('/dashboard/foto/toggleStatus/{id}', [DesfileController::class, 'toggleStatusFoto'])->name('dashboard.toggleStatusFotoDesfile');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
