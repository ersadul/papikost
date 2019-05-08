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
Route::group(['namespace' => 'Guest'], function(){
    Route::get('/', 'GuestController@index');
    Route::post('/search', 'GuestController@getDate')->name('search');
    // awal penting
    Route::post('/room-detail', 'GuestController@getKamar')->name('room.detail'); // ini harus
    Route::post('/room-detail/{id}', 'GuestController@getKamar')->name('room.detail1');
    Route::post('/booking-form', 'GuestController@bookingForm')->name('booking.form');
    Route::post('/invoice', 'GuestController@getInvoice')->name('invoice');
    Route::get('/cek-pesanan', function () { return view('cekPesanan'); })->name('cek.pesanan');
    Route::post('/hasil-invoice', 'GuestController@cekInvoice')->name('hasil.invoice');
    // Route::get('/room-detail', 'GuestController@getKamar')->name('room.detail'); // ini harus
    // Route::get('/room-detail/{id}', 'GuestController@getKamar')->name('room.detail1');
    // akhir penting
});

// Route::post('/search', function () {
//     return view('roomList');
// })->name('search');


// Route::get('/room-detail', function () {
//     return view('roomDetail');
// })->name('room.detail');

// Route::post('/booking-form', function () {
//     return view('bookingForm');
// })->name('booking.form');

// Route::post('/invoice', function () {
//     return view('invoice');
// })->name('invoice');

// Route::get('/cek-pesanan', function () {
//     return view('cekPesanan');
// })->name('cek.pesanan');
Route::get('/promo', function () {
    return view('promo');
})->name('promo');

// ================================

Route::group(['prefix' => 'dashboard'], function () {
    Route::name('dashboard.')->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        })->name('index');

        //hari ini
        Route::get('/check-in', function () {
            return view('dashboard.hariIni.checkIn');
        })->name('checkin');
        Route::get('/menginap', function () {
            return view('dashboard.hariIni.menginap');
        })->name('menginap');
        Route::get('/check-out', function () {
            return view('dashboard.hariIni.checkOut');
        })->name('checkout');


        //reservasi
        Route::get('/reservasi', 'Admin\ReservasiController@index')->name('reservasi');
        Route::post('/reservasi', 'Admin\ReservasiController@form')->name('form.reservasi');
        Route::post('/reservasi/pembayaran', 'Admin\ReservasiController@pembayaran')->name('reservasi.pembayaran');

        Route::get('/list-reservasi', 'Admin\ReservasiController@list')->name('list.reservasi');
        Route::get('/list-reservasi/detail', 'Admin\ReservasiController@detail')->name('detail.reservasi');

        //review
        Route::get('/review', function () {
            return view('dashboard.review');
        })->name('review');

        //bantuan
        Route::get('/bantuan', function () {
            return view('dashboard.bantuan');
        })->name('bantuan');
    });
});
// end route frontend

Route::group(['namespace' => 'Admin'], function(){
    Route::get('/admin/kamar', 'KamarController@index');
    Route::post('/admin/kamar/store', 'KamarController@storeKamar');
    Route::get('/admin/kamar/edit/{id}', 'KamarController@editKamar');
    Route::post('/admin/kamar/update', 'KamarController@updateKamar');
    Route::delete('/admin/kamar/delete/{id}', 'KamarController@deleteKamar');
});