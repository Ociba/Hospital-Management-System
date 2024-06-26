<?php

use Illuminate\Support\Facades\Route;
use Modules\Ward\App\Http\Controllers\WardController;

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

Route::group(['prefix' => 'ward', 'middleware' => ['auth']], function () {
    Route::get('/{status}', 'WardController@index')->name('ward');
});
