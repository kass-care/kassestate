<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DealAnalysisController;
use App\Http\Controllers\RefinanceController;
use App\Http\Controllers\RehabProjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PortfolioMetricController;

use App\Http\Controllers\CashFlowController;

Route::resource('documents', DocumentController::class);
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::resource('deal-analyses', DealAnalysisController::class);
Route::resource('refinances', RefinanceController::class);
Route::resource('refinances', RefinanceController::class);

Route::resource('rehab-projects', RehabProjectController::class);
Route::resource('tenants', TenantController::class);
Route::get('/portfolio-metrics', [PortfolioMetricController::class, 'index'])->name('portfolio-metrics.index');
Route::resource('cash-flows', CashFlowController::class);
