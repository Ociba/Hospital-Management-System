<?php

use Illuminate\Support\Facades\Route;
use Modules\Setup\App\Http\Controllers\SetupController;

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

Route::group(['prefix' => 'setup', 'middleware' => ['auth']], function () {
    Route::get('/user_type', 'SetupController@userType')->name('User Type');
});
Route::get('/logout', 'SetupController@logoutUser');
