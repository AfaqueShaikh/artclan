<?php

Route::group(['module' => 'ArtistContactRequest', 'middleware' => ['web'], 'namespace' => 'App\Modules\ArtistContactRequest\Controllers'], function() {

    Route::get('/admin/artist-contact-request/list', 'ArtistContactRequestController@listArtistContactRequest')->middleware('permission:view.contactus');
// Route::get('/admin/contactus/list', function(){dd(34);})->middleware('permission:view.contactus');
    Route::get('/admin/artist-contact-request/data', 'ArtistContactRequestController@ArtistContactRequestData')->middleware('permission:view.contactus');

//
    Route::get('/admin/artist-contact-request/reply/{id}', 'ArtistContactRequestController@updateArtistContactRequest')->middleware('permission:reply.contactus');
    Route::post('/admin/artist-contact-request/reply/{id}', 'ArtistContactRequestController@updateArtistContactRequest')->middleware('permission:reply.contactus');

});
