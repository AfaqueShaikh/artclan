<?php

Route::group(['module' => 'ArtistRecruiterRequest', 'middleware' => ['web'], 'namespace' => 'App\Modules\ArtistRecruiterRequest\Controllers'], function() {

    Route::get('/admin/artist-recruiter/list', 'ArtistRecruiterRequestController@listArtistRecruiterRequest')->middleware('permission:view.contactus');
// Route::get('/admin/contactus/list', function(){dd(34);})->middleware('permission:view.contactus');
    Route::get('/admin/artist-recruiter/data', 'ArtistRecruiterRequestController@ArtistRecruiterData')->middleware('permission:view.contactus');

//
    Route::get('admin/approve-artist-recruiter-request/{id}', 'ArtistRecruiterRequestController@ApproveArtistRecruiterRequest')->middleware('permission:reply.contactus');
    //Route::post('/admin/artist-contact-request/reply/{id}', 'ArtistContactRequestController@updateArtistContactRequest')->middleware('permission:reply.contactus');

});
