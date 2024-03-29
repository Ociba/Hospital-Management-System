<?php

use Illuminate\Support\Facades\Route;
use Modules\Laboratory\App\Http\Controllers\LaboratoryController;

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

Route::group(['prefix' => 'laboratory', 'middleware' => ['auth']], function () {
    Route::get('/stock', 'LaboratoryController@stock')->name('Laboratory Stock');
    Route::get('/stock_usage', 'LaboratoryController@stockUsage')->name('Laboratory Stock Usage');
    Route::get('/results', 'LaboratoryController@patientResults')->name('Laboratory Results');
});
