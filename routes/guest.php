<?php

Route::name('guest.')->group(function () {
	Route::get('/', 'GuestController@index')->name('index');
    Route::get('create', 'GuestController@create')->name('craete');
    Route::post('store',  'GuestController@store')->name('store');
});