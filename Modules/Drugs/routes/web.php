<?php

use Illuminate\Support\Facades\Route;
use Modules\Drugs\App\Http\Controllers\DrugsController;

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

Route::group(['prefix' => 'drugs', 'middleware' => ['auth']], function () {
    Route::get('/stock', 'DrugsController@index')->name('Pharmacy');
    Route::get('/nurse', 'DrugsController@nurseRecord')->name('Nurse Records');
    Route::get('/patient', 'DrugsController@patientRecord')->name('Patient Record');
});
