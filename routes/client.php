<?php

Route::name('client.')->group(function () {
	Route::get('/client/userinfo', 'ClientController@userinfo')->name('userinfo');
	Route::get('/client/addressinfo', 'ClientController@addressinfo')->name('addressinfo');
    Route::get('/home', 'ClientController@index')->name('client');

});