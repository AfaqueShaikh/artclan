<?php

Route::group(['module' => 'Taluka', 'middleware' => ['web'], 'namespace' => 'App\Modules\Taluka\Controllers'], function() {

    Route::get('/admin/taluka/list', 'TalukaController@listTaluka')->middleware('permission:view.talukas');
    Route::get('/admin/taluka/data', 'TalukaController@data')->middleware('permission:view.talukas');

    Route::get('/admin/taluka/create', 'TalukaController@create')->middleware('permission:create.talukas');
    Route::post('/admin/taluka/create', 'TalukaController@create')->middleware('permission:create.talukas');

    Route::get('/admin/taluka/update/{id}', 'TalukaController@update')->middleware('permission:update.talukas');
    Route::post('/admin/taluka/update/{id}', 'TalukaController@update')->middleware('permission:update.talukas');

    Route::get('/admin/taluka/delete/{id}', 'TalukaController@delete')->middleware('permission:delete.talukas');

    Route::get('/admin/taluka/get/state', 'TalukaController@getState')->middleware('permission:create.districts');
    Route::get('/admin/taluka/update/get/state', 'TalukaController@getState')->middleware('permission:create.districts');

    Route::get('/admin/taluka/get/district', 'TalukaController@getDistrict')->middleware('permission:delete.question-answers');
    Route::get('/admin/taluka/update/get/district', 'TalukaController@getDistrict')->middleware('permission:delete.question-answers');
});
