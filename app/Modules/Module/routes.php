<?php

Route::group(['module' => 'Module', 'middleware' => ['web'], 'namespace' => 'App\Modules\Module\Controllers'], function() {

    Route::get('/admin/module/list', 'ModuleController@listModule')->middleware('permission:view.modules');
    Route::get('/admin/module/data', 'ModuleController@data')->middleware('permission:view.modules');

    Route::get('/admin/module/create', 'ModuleController@create')->middleware('permission:create.modules');
    Route::post('/admin/module/create', 'ModuleController@create')->middleware('permission:create.modules');

    Route::get('/admin/module/update/{id}', 'ModuleController@update')->middleware('permission:update.modules');
    Route::post('/admin/module/update/{id}', 'ModuleController@update')->middleware('permission:update.modules');

    Route::get('/admin/module/delete/{id}', 'ModuleController@delete')->middleware('permission:delete.modules');
    
    Route::get('/admin/module/generate/seed', 'ModuleController@generateSeed')->middleware('permission:create.modules');


});
