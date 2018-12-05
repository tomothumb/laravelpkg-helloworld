<?php


Route::get('/helloworld', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getHelloworld');
Route::get('/service_sample', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSample');
Route::get('/service_sample_di', 'Tomothumb\LaravelpkgHelloworld\HelloworldController@getServiceSampleDI');
