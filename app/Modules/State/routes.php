<?php

Route::group(['module' => 'State', 'middleware' => ['web'], 'namespace' => 'App\Modules\State\Controllers'], function() {

    Route::get('/admin/state/list', 'StateController@listState')->middleware('permission:view.states');
    Route::get('/admin/state/data', 'StateController@data')->middleware('permission:view.states');

    Route::get('/admin/state/create', 'StateController@create')->middleware('permission:create.states');
    Route::post('/admin/state/create', 'StateController@create')->middleware('permission:create.states');

    Route::get('/admin/state/update/{id}', 'StateController@update')->middleware('permission:update.states');
    Route::post('/admin/state/update/{id}', 'StateController@update')->middleware('permission:update.states');

    Route::get('/admin/state/delete/{id}', 'StateController@delete')->middleware('permission:delete.states');


});
