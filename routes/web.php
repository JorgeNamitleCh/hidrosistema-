<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::get('/', function () {
    return view('admin.index');
});

Route::get('/we/philosophy', function () {
    return view('admin.we.philosophy');
});

Route::get('/we/record', function () {
    return view('admin.we.record');
});

Route::get('/we/history', function () {
    return view('admin.we.history');
});

Route::get('/we/directory', function () {
    return view('admin.we.directory');
});

Route::get('/services/information', function () {
    return view('admin.services.information');
});

Route::get('/services/formalities', function () {
    return view('admin.services.formalities');
});

Route::get('/services/services', function () {
    return view('admin.services.services');
});