<?php

Route::name('admin.')->group(function () {
    Route::get('index', 'AdminController@index')->name('index');
});