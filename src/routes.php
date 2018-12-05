<?php


Route::get('/helloworld', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getHelloworld');
Route::get('/helloworld_service', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSample');
Route::get('/helloworld_service_di', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSampleDI');
Route::get('/helloworld_service_facade', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSampleFacade');
