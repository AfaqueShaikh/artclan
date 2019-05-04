<?php

Route::group(['module' => 'Testimonial', 'middleware' => ['web'], 'namespace' => 'App\Modules\Testimonial\Controllers'], function() {

    Route::get('/admin/testimonial/list', 'TestimonialController@listTestimonial')->middleware('permission:view.Countries');
    Route::get('/admin/testimonial/data', 'TestimonialController@data')->middleware('permission:view.Countries');

    Route::get('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');
    Route::post('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');

    Route::get('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');
    Route::post('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');

    Route::get('/admin/testimonial/delete/{id}', 'TestimonialController@delete')->middleware('permission:delete.Countries');


});
