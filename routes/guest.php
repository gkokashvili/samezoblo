<?php

Route::name('guest.')->group(function () {
	Route::get('/', 'GuestController@index')->name('index');
    Route::get('create', 'GuestController@create')->name('create');
    Route::post('store',  'GuestController@store')->name('store');
    Route::get('search', 'GuestController@search')->name('search');
});