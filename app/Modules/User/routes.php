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
    Route::post('/change/user/status/{id}','UserController@changeStatus')->middleware('permission:delete.users');

    Route::get('/chk-mobile-no/artist','UserController@checkMobileNumber');
    

    Route::get('login/by/admin/{id}','UserController@loginByAdmin');

    Route::get('/recruiter/login-by/artist/{id}','UserController@recruiterLoginByArtist');

    //frontend code
    
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/logout','UserController@logout');
    Route::post('/user/videos/create', 'UserController@createVideos');
    Route::post('/user/photos/create', 'UserController@createPhotos');
    Route::post('/user/documents/create', 'UserController@createDocument');
    Route::post('/user/profile-picture/update', 'UserController@updateProfilePicture');
    Route::post('/user/about-me/update', 'UserController@updateAboutMe');
    Route::post('/user/education/create', 'UserController@createEducation');
    Route::post('/user/work-preference/update', 'UserController@updateWorkPreference');
    Route::post('/user/experience/create', 'UserController@createExperience');
    Route::post('/user/physical-attributes/create', 'UserController@createPhysics');
    Route::post('/user/writing-type/create','UserController@createWritingType');
    Route::post('/user/genre/create','UserController@createGenre');
    Route::post('/contact/admin','UserController@contactAdmin');

    Route::get('/request/for/recruiter-account','UserController@requestForRecruiterAccount');
});
