<?php

use Illuminate\Support\Facades\Route;
use Modules\Patient\App\Http\Controllers\PatientController;

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

Route::group(['prefix' => 'patient', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'PatientController@index')->name('Dashboard');
    Route::get('/booking', 'PatientController@booking')->name('Booking');
    Route::get('/reception', 'PatientController@reception')->name('Reception');
});
