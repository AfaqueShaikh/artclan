<?php

Route::group(['module' => 'Ads', 'middleware' => ['web'], 'namespace' => 'App\Modules\Ads\Controllers'], function() {

    Route::get('/admin/ads/list', 'AdsController@listAds')->middleware('permission:view.Countries');
    Route::get('/admin/ads/data', 'AdsController@data')->middleware('permission:view.Countries');

    Route::get('/admin/ads/create', 'AdsController@create')->middleware('permission:create.Countries');
    Route::post('/admin/ads/create', 'AdsController@create')->middleware('permission:create.Countries');

    Route::get('admin/ads/update/{id}', 'AdsController@update')->middleware('permission:update.Countries');
    Route::post('admin/ads/update/{id}', 'AdsController@update')->middleware('permission:update.Countries');

    Route::get('/admin/ads/delete/{id}', 'AdsController@delete')->middleware('permission:delete.Countries');


});
