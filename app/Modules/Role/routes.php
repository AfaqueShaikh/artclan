<?php

Route::group(['module' => 'Role', 'middleware' => ['web'], 'namespace' => 'App\Modules\Role\Controllers'], function() {

    Route::get('/admin/role/list', 'RoleController@listUser')->middleware('permission:view.roles');
    Route::get('/admin/role/data', 'RoleController@data')->middleware('permission:view.roles');

    Route::get('/admin/role/create', 'RoleController@create')->middleware('permission:create.roles');
    Route::post('/admin/role/create', 'RoleController@create')->middleware('permission:create.roles');

    Route::get('/admin/role/update/{id}', 'RoleController@update')->middleware('permission:update.roles');
    Route::post('/admin/role/update/{id}', 'RoleController@update')->middleware('permission:update.roles');

    Route::get('/admin/role/delete/{id}', 'RoleController@delete')->middleware('permission:delete.roles');

//permission
    Route::get('/admin/role/permission/set/{id}', 'RoleController@setPermission')->middleware('permission:set.permissions');
    Route::post('/admin/role/permission/set/{id}', 'RoleController@setPermission')->middleware('permission:set.permissions');


});
