<?php

Route::group(['module' => 'Country', 'middleware' => ['web'], 'namespace' => 'App\Modules\Country\Controllers'], function() {

    Route::get('/admin/country/list', 'CountryController@listCountry')->middleware('permission:view.Countries');
    Route::get('/admin/country/data', 'CountryController@data')->middleware('permission:view.Countries');

    Route::get('/admin/country/create', 'CountryController@create')->middleware('permission:create.Countries');
    Route::post('/admin/country/create', 'CountryController@create')->middleware('permission:create.Countries');

    Route::get('/admin/country/update/{id}', 'CountryController@update')->middleware('permission:update.Countries');
    Route::post('/admin/country/update/{id}', 'CountryController@update')->middleware('permission:update.Countries');

    Route::get('/admin/country/delete/{id}', 'CountryController@delete')->middleware('permission:delete.Countries');


});
