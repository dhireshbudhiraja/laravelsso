<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'DhireshBudhiraja\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'DhireshBudhiraja\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'DhireshBudhiraja\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'DhireshBudhiraja\LaravelSSO\Controllers\ServerController@userInfo');
});
