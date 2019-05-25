<?php

Route::group(['module' => 'Promotion', 'middleware' => ['web'], 'namespace' => 'App\Modules\Promotion\Controllers'], function() {

    Route::get('/admin/promotion/list', 'PromotionController@listPromotionUser')->middleware('permission:view.Countries');
    Route::get('/admin/promotion-user/data', 'PromotionController@promotionUserData')->middleware('permission:view.Countries');
    Route::post('/send/promotional/message','PromotionController@sendPromotionMessageUser');

    Route::get('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');
    Route::post('/admin/testimonial/create', 'TestimonialController@create')->middleware('permission:create.Countries');

    Route::get('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');
    Route::post('admin/testimonial/update/{id}', 'TestimonialController@update')->middleware('permission:update.Countries');

    Route::get('/admin/testimonial/delete/{id}', 'TestimonialController@delete')->middleware('permission:delete.Countries');


});
