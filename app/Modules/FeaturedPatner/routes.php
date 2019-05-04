<?php

Route::group(['module' => 'FeaturedPatner', 'middleware' => ['web'], 'namespace' => 'App\Modules\FeaturedPatner\Controllers'], function() {

    Route::get('/admin/featured-patner/list', 'FeaturedPatnerController@listFeaturedPatner')->middleware('permission:view.Countries');
    Route::get('/admin/featured-patner/data', 'FeaturedPatnerController@data')->middleware('permission:view.Countries');

    Route::get('/admin/featured-patner/create', 'FeaturedPatnerController@create')->middleware('permission:create.Countries');
    Route::post('/admin/featured-patner/create', 'FeaturedPatnerController@create')->middleware('permission:create.Countries');

    Route::get('admin/featured-patner/update/{id}', 'FeaturedPatnerController@update')->middleware('permission:update.Countries');
    Route::post('admin/featured-patner/update/{id}', 'FeaturedPatnerController@update')->middleware('permission:update.Countries');

    Route::get('/admin/featured-patner/delete/{id}', 'FeaturedPatnerController@delete')->middleware('permission:delete.Countries');


});
