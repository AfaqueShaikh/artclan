<?php

Route::group(['module' => 'Recruiter', 'middleware' => ['web'], 'namespace' => 'App\Modules\Recruiter\Controllers'], function() {
    Route::get('/admin/recruiter/list', 'RecruiterController@listRecruiter')->middleware('permission:view.users');
    Route::get('admin/recruiter/data', 'RecruiterController@data')->middleware('permission:view.users');

    Route::get('/admin/recruiter/create', 'RecruiterController@create')->middleware('permission:create.users');
    Route::post('/admin/recruiter/create', 'RecruiterController@create')->middleware('permission:create.users');
    Route::get('/admin/recruiter/update/{id}', 'RecruiterController@update')->middleware('permission:update.users');
    Route::post('/admin/recruiter/update/{id}', 'RecruiterController@update')->middleware('permission:update.users');
    Route::delete('/admin/recruiter/delete/{id}', 'RecruiterController@delete')->middleware('permission:delete.users');
    Route::post('/change/recruiter/status/{id}','RecruiterController@changeStatus')->middleware('permission:delete.users');

    Route::get('/chk-mobile-update-duplicate/recruiter','RecruiterController@checkMobileNumber');
    

    Route::get('recruiter/login/by/admin/{id}','RecruiterController@recruiterLoginByAdmin');

    //frontend code
    
    Route::get('/recruiter/dashboard', 'RecruiterController@recruiterDashboard');
    Route::post('/recruiter/edit/profile','RecruiterController@recruiterEditProfile');
    Route::post('/recruiter/profile-picture/update','RecruiterController@updateRecruiterProfilePic');
    //Route::get('/logout','UserController@logout');
    /*Route::post('/user/videos/create', 'UserController@createVideos');
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

    Route::get('/request/for/recruiter-account','UserController@requestForRecruiterAccount');*/
});
