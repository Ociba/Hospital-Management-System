<?php

use Illuminate\Support\Facades\Route;
use Modules\ConsultationRoom\App\Http\Controllers\ConsultationRoomController;

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

Route::group(['prefix' => 'consultationroom', 'middleware' => ['auth']], function () {
    Route::get('/general', 'ConsultationRoomController@general')->name('Doctor');
    Route::get('/special', 'ConsultationRoomController@special')->name('Special Doctor');
});
