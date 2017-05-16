<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['permission:dashboards']], function(){
        Route::get('/', function(){
            return 'TUDO OK';
        });
        //Route::get('/', 'AdminController@index')->name('admin-dashboard');
    });
});