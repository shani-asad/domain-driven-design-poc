<?php

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

Route::get('/', function () {
    return redirect('/clinics');
});

//Route::get('/clinics', function() {
//    $select = DB::select('select * from clinics');
//    return view('clinics.index')->with('name',$select);
//})->name('clinics');
//
//Route::get('/registerClinics', [RegisterClinicController::class, 'index'])->name('registerClinic');
//Route::post('/registerClinics', [RegisterClinicController::class, 'store']);
