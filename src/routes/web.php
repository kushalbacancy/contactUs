<?php

Route::group(['namespace' => 'Kushal\ContactUs\Http\Controllers'], function () {
    Route::get('kushal/contact-us','ContactUsController@index')->name('contact');
    Route::post('kushal/contact-us','ContactUsController@sendEmail')->name('send.contact');
});
