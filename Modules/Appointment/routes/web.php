<?php

use Illuminate\Support\Facades\Route;
use Modules\Appointment\App\Http\Controllers\AppointmentController;

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

Route::group(['prefix' => 'appointment', 'middleware' => ['auth']], function () {
    Route::get('/make-appointment','AppointmentController@nakeAppointment')->name('Make Appointment');
    Route::get('/{appointment_status}', 'AppointmentController@index')->name('Appointment');
});
