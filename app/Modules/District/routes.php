<?php

Route::group(['module' => 'District', 'middleware' => ['web'], 'namespace' => 'App\Modules\District\Controllers'], function() {

    Route::get('/admin/district/list', 'DistrictController@listDistrict')->middleware('permission:view.districts');
    Route::get('/admin/district/data', 'DistrictController@data')->middleware('permission:view.districts');

    Route::get('/admin/district/create', 'DistrictController@create')->middleware('permission:create.districts');
    Route::post('/admin/district/create', 'DistrictController@create')->middleware('permission:create.districts');

    Route::get('/admin/district/update/{id}', 'DistrictController@update')->middleware('permission:update.districts');
    Route::post('/admin/district/update/{id}', 'DistrictController@update')->middleware('permission:update.districts');

    Route::get('/admin/district/delete/{id}', 'DistrictController@delete')->middleware('permission:delete.districts');

    Route::get('/admin/district/get/state', 'DistrictController@getState')->middleware('permission:create.districts');
    Route::get('/admin/district/update/get/state', 'DistrictController@getState')->middleware('permission:create.districts');


});
