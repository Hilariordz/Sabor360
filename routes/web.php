<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('sobre-nosotros');

Route::get('/test-translation', function () {
    return view('test-translation');
})->name('test-translation');

Route::get('/menu-interactivo', function () {
    return view('menu-interactivo');
})->name('menu-interactivo');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Rutas temporales para ver las páginas de error (solo para desarrollo)
Route::get('/test-404', function () {
    return view('errors.404');
});

Route::get('/test-403', function () {
    return view('errors.403');
});

Route::get('/test-500', function () {
    return view('errors.500');
});

Route::get('/test-419', function () {
    return view('errors.419');
});

Route::get('/translation-test', function () {
    return view('translation-test');
});

// Reservation routes
Route::get('/reservaciones', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservaciones', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservaciones/exito', [App\Http\Controllers\ReservationController::class, 'success'])->name('reservations.success');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
