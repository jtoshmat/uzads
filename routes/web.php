<?php

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

//DO NOT REMOVE THIS -- This a fix for http://my-best-doctor.uz/healthflex?wc-ajax=get_refreshed_fragments 404 page
Route::get('healthflex', function () {
    return 'healthflex';
});


Route::get('/welcome', 'TestController@welcome');
