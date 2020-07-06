<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Plugin\Example\Http\Controllers')->group(function () {

    Route::get('/example/grid/provider', 'ApiController@gridProvider');
    Route::get('/example/form/store', 'ApiController@store');
    Route::get('/example/form/update', 'ApiController@update');
});
