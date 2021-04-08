<?php

use App\Http\Clinic\ClinicController;
use App\Http\Clinic\RegisterClinicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/clinics');
});

Route::get('/clinics', [ClinicController::class, 'index'])->name('clinics');

Route::get('/registerClinics', [RegisterClinicController::class, 'index'])->name('registerClinic');
Route::post('/registerClinics', [RegisterClinicController::class, 'store']);
