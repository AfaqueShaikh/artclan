<?php

Route::group(['module' => 'PaymentDetail', 'middleware' => ['web'], 'namespace' => 'App\Modules\PaymentDetail\Controllers'], function() {

    Route::get('/admin/payment/list', 'PaymentDetailController@listPayment')->middleware('permission:view.Countries');
    Route::get('/admin/payment/data', 'PaymentDetailController@data')->middleware('permission:view.Countries');

    /*Route::get('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');
    Route::post('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');

    Route::get('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');
    Route::post('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');

    Route::get('/admin/testimonial/delete/{id}', 'TestimonialController@delete')->middleware('permission:delete.Countries');*/


});
