<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Plugin\Example\Http\Controllers')->group(function () {

    // Route::get('/example/home', 'FrontController@home')->name('example.home');
    Route::get('/example/page', 'FrontController@page')->name('example.page');
    Route::get('/example/form', 'FrontController@form')->name('example.form');
    Route::get('/example/grid', 'FrontController@grid')->name('example.grid');
    Route::get('/example/forbidden', 'FrontController@forbidden')->name('example.forbidden');
    Route::get('/example/unauthorized', 'FrontController@unauthorized')->name('example.unauthorized');
});
