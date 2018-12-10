<?php

use Illuminate\Support\Facades\Route;

Route::get('/helloworld', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getHelloworld');
Route::get('/helloworld_service', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSample');
Route::get('/helloworld_service_di', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSampleDI');
Route::get('/helloworld_service_facade', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSampleFacade');
Route::get('/helloworld_blade', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@bladeSample');
