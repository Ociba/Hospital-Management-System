<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\App\Http\Controllers\StaffController;

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

Route::group(['prefix' => 'staff', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'StaffController@dashboard')->name('Dashboard');
    Route::get('/', 'StaffController@index')->name('Staff');
    Route::get('/support_staff', 'StaffController@supportStaff')->name('Support Staff');
    Route::get('/profile', 'StaffController@profile')->name('Staff Profile');
    Route::get('/stock', 'StaffController@stock')->name('Staff Stock');
    Route::get('/treatment', 'StaffController@treatment')->name('Ward Treatment');
    Route::get('/todays_patients', 'StaffController@todaysPatient')->name('Todays Patients');
    Route::get('/all_patient', 'StaffController@allPatients')->name('All Patients');
    Route::get('/results', 'StaffController@results')->name('Staff Results');
    Route::get('/prescription', 'StaffController@prescription')->name('Staff Prescription');
    Route::get('/change_password', 'StaffController@changePassword')->name('Staff Change Password');
});
