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




Route::get('/', ['as'=>'home','uses'=>'GeneralController@home']);

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/donate', function () {
    return view('contribution');
});

Route::group(['middleware' => 'web'], function () {
	Route::get('fileUpload', function () {
        return view('fileUpload');
    });
    Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'GeneralController@fileUpload']);
});
