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
    return view('welcome');
});

Route::post('/ussd', 'USSD\GeneralController@ussdRequestHandler');

// Route::group(['prefix' => 'ussd'], function () {
//     Route::get('track/{order}/', 'USSD\GeneralController@track');
//     Route::post('stats', 'USSD\GeneralController@stats');
// });
