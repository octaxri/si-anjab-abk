<?php

use Illuminate\Support\Facades\Route;

Route::auth();
Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['web', 'auth', 'roles']], function () {
    Route::group(['roles' => 'User'], function () {
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'HomeController@index')->name('user.home');
            Route::get('analisisjabatan', 'AnalisisJabatanController@index')->name('user.anjab');
            Route::get('analisisbebankerja', 'AnalisisBebanKerjaController@index')->name('user.abk');
            Route::get('evaluasijabatan', 'EvaluasiJabtanController@index')->name('user.evajab');
        });
    });
    Route::group(['roles' => 'Admin'], function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', 'HomeController@index')->name('admin.home');
            Route::get('analisisjabatan', 'AnalisisJabatanController@index')->name('admin.anjab');
            Route::get('analisisbebankerja', 'AnalisisBebanKerjaController@index')->name('admin.abk');
            Route::get('evaluasijabatan', 'EvaluasiJabtanController@index')->name('admin.evajab');
        });
    });
});
