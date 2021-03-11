<?php

use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReporteController::class, 'index'])->name('reportes.index');

Route::get('reportes/{reporte}', [ReporteController::class, 'show'])->name('reportes.show');

Route::get('category/{category}', [ReporteController::class, 'category'])->name('reportes.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
