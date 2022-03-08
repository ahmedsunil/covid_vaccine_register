<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VaccinationsController;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::resource('users', RegisteredUserController::class)->only([
    'index','create', 'store', 'destroy'
]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'vaccines' => VaccinesController::class,
        'staff' => StaffController::class,
        'patients' => PatientsController::class,
        'vaccinations' => VaccinationsController::class,
    ]);



});





//Route::group(['middleware' => 'admin'] , function () {
//    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//    Route::resource('vaccines',VaccinesController::class);
//    Route::resource('staff', StaffController::class);
//    Route::resource('patients', PatientsController::class);
//    Route::resource('vaccinations', VaccinationsController::class);
//});
