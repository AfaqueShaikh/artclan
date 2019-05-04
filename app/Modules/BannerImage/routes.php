<?php

Route::group(['module' => 'BannerImage', 'middleware' => ['web'], 'namespace' => 'App\Modules\BannerImage\Controllers'], function() {

    Route::get('/admin/banner/list', 'BannerImageController@listBannerImage')->middleware('permission:view.Countries');
    Route::get('/admin/banner/data', 'BannerImageController@data')->middleware('permission:view.Countries');

    Route::get('/admin/banner/create', 'BannerImageController@create')->middleware('permission:create.Countries');
    Route::post('/admin/banner/create', 'BannerImageController@create')->middleware('permission:create.Countries');

    Route::get('admin/banner/update/{id}', 'BannerImageController@update')->middleware('permission:update.Countries');
    Route::post('admin/banner/update/{id}', 'BannerImageController@update')->middleware('permission:update.Countries');

    Route::get('/admin/banner/delete/{id}', 'BannerImageController@delete')->middleware('permission:delete.Countries');


});
