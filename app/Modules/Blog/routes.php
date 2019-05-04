<?php

Route::group(['module' => 'Blog', 'middleware' => ['web'], 'namespace' => 'App\Modules\Blog\Controllers'], function() {

    Route::get('/admin/blog/list', 'BlogController@listBlog')->middleware('permission:view.Countries');
    Route::get('/admin/blog/data', 'BlogController@data')->middleware('permission:view.Countries');

    Route::get('/admin/blog/create', 'BlogController@create')->middleware('permission:create.Countries');
    Route::post('/admin/blog/create', 'BlogController@create')->middleware('permission:create.Countries');

    Route::get('admin/blog/update/{id}', 'BlogController@update')->middleware('permission:update.Countries');
    Route::post('admin/blog/update/{id}', 'BlogController@update')->middleware('permission:update.Countries');

    Route::get('/admin/blog/delete/{id}', 'BlogController@delete')->middleware('permission:delete.Countries');


});
