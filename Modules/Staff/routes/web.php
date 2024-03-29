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
    Route::get('/', 'StaffController@index')->name('Staff');
    Route::get('/support_staff', 'StaffController@supportStaff')->name('Support Staff');
});
