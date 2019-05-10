<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers'], function() {
    Route::get('/admin/user/list/{user_type}', 'UserController@listUser')->middleware('permission:view.users');
    Route::get('/admin/user/data/{user_type}', 'UserController@data')->middleware('permission:view.users');
    Route::get('/admin/user/manage/artist-of-the-day/{user_type}', 'UserController@listArtistOfTheDay')->middleware('permission:view.users');
    Route::get('/admin/user/manage/artist-of-the-day/data/{user_type}', 'UserController@artistOfTheDaydata')->middleware('permission:view.users');
    Route::get('/admin/set/artist-of-the-day/{type}', 'UserController@setArtistOfTheDay')->middleware('permission:view.users');
    Route::get('/admin/user/create/{user_type}', 'UserController@create')->middleware('permission:create.users');
    Route::post('/admin/user/create/{user_type}', 'UserController@create')->middleware('permission:create.users');
    Route::get('/admin/user/update/{id}', 'UserController@update')->middleware('permission:update.users');
    Route::post('/admin/user/update/{id}', 'UserController@update')->middleware('permission:update.users');
    Route::delete('/admin/user/delete/{id}', 'UserController@delete')->middleware('permission:delete.users');
    
    
    //frontend code
    
    Route::get('/dashboard', 'UserController@dashboard');
    Route::post('/user/videos/create', 'UserController@createVideos');
    Route::post('/user/photos/create', 'UserController@createPhotos');
    Route::post('/user/documents/create', 'UserController@createDocument');
    Route::post('/user/profile-picture/update', 'UserController@updateProfilePicture');
    Route::post('/user/about-me/update', 'UserController@updateAboutMe');
    Route::post('/user/education/create', 'UserController@createEducation');
});
