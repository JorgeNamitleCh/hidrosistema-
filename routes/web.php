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

Route::get('/waterCulture/water', function () {
    return view('admin.waterCulture.water');
});

Route::get('/waterCulture/history', function () {
    return view('admin.waterCulture.history');
});

Route::get('/waterCulture/worldWaterDay', function () {
    return view('admin.waterCulture.worldWaterDay');
});

Route::get('/waterCulture/availabilityWater', function () {
    return view('admin.waterCulture.availabilityWater');
});

Route::get('/waterCulture/clubAquamigos', function () {
    return view('admin.waterCulture.clubAquamigos');
});

Route::get('/waterCulture/friendship', function () {
    return view('admin.waterCulture.friendship');
});

Route::get('waterSanation/sources', function () {
    return view('admin.waterSanation.sources');
});

Route::get('waterSanation/desinfection', function () {
    return view('admin.waterSanation.desinfection');
});

Route::get('waterSanation/sanitation', function () {
    return view('admin.waterSanation.sanitation');
});

Route::get('waterSanation/waterQuality', function () {
    return view('admin.waterSanation.waterQuality');
});

Route::get('waterSanation/normativity', function () {
    return view('admin.waterSanation.normativity');
});

Route::get('waterSanation/harvest', function () {
    return view('admin.waterSanation.harvest');
});

Route::get('contacts/index', function () {
    return view('admin.contacts.index');
});


Route::resource('receipts','ReceiptController');

