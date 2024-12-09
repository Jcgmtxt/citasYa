<?php

use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuario', UserController::class);
Route::resource('horario-doctores', DoctorScheduleController::class);
Route::resource('horario-pacientes', DoctorScheduleController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
