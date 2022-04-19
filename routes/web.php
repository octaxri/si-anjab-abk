<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('AnalisisJabatan.PetaJabatan');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('analisisjabatan', 'AnalisisJabatanController@index')->name('user.anjab');
    Route::get('analisisbebankerja', 'AnalisisBebanKerjaController@index')->name('user.abk');
    Route::get('evaluasijabatan', 'EvaluasiJabtanController@index')->name('user.evajab');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('analisisjabatan', 'AnalisisJabatanController@index')->name('admin.anjab');
    Route::get('analisisbebankerja', 'AnalisisBebanKerjaController@index')->name('admin.abk');
    Route::get('evaluasijabatan', 'EvaluasiJabtanController@index')->name('admin.evajab');
});
