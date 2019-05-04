<?php

Route::group(['module' => 'ArtistCategories', 'middleware' => ['web'], 'namespace' => 'App\Modules\ArtistCategories\Controllers'], function() {

    Route::get('/admin/artist/list', 'CategoryController@listArtists')->middleware('permission:view.artistscategories');
    Route::get('/admin/artist/data', 'CategoryController@data')->middleware('permission:view.artistscategories');
    Route::get('/admin/artist/category/list/{type}', 'CategoryController@listCategoryList')->middleware('permission:view.artistscategories');
    Route::get('/admin/artist/category/data/{type}', 'CategoryController@dataCategory')->middleware('permission:view.artistscategories');
    Route::get('/admin/artist/category/create/{type}', 'CategoryController@create')->middleware('permission:view.artistscategories');
    Route::post('/admin/artist/category/create/{type}', 'CategoryController@create')->middleware('permission:view.artistscategories');

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
