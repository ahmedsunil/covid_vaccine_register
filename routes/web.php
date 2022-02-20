<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VaccinationsController;
use App\Http\Controllers\VaccinesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('vaccines',VaccinesController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('patients', PatientsController::class);
    Route::resource('vaccinations', VaccinationsController::class);
});

