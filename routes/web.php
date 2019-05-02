<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route frontend
Route::get('/', function () {
    return view('index');
});

Route::post('/search', function () {
    return view('roomList');
})->name('search');

Route::get('/room-detail', function () {
    return view('roomDetail');
})->name('room.detail');

Route::post('/booking-form', function () {
    return view('bookingForm');
})->name('booking.form');

Route::post('/invoice', function () {
    return view('invoice');
})->name('invoice');
// end route frontend

Route::group(['namespace' => 'Admin'], function(){
    Route::get('/admin/kamar', 'KamarController@index');
    Route::post('/admin/kamar/store', 'KamarController@storeKamar');
    Route::get('/admin/kamar/edit/{id}', 'KamarController@editKamar');
    Route::post('/admin/kamar/update', 'KamarController@updateKamar');
    Route::delete('/admin/kamar/delete/{id}', 'KamarController@deleteKamar');
});