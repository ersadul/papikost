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
Route::group(['namespace' => 'Guest'], function () {
    Route::get('/', 'GuestController@index')->name('index');
    Route::get('/search', function () {return redirect()->route('index');});
    Route::post('/search', 'GuestController@getDate')->name('search');

    Route::get('/about/{url}', 'GuestController@static')->name('static');
    // awal penting
    Route::post('/room-detail', 'GuestController@getKamar')->name('room.detail'); // ini harus
    Route::post('/room-detail/{id}', 'GuestController@getKamar')->name('room.detail1');
    Route::post('/booking-form', 'GuestController@bookingForm')->name('booking.form');
    Route::post('/invoice', 'GuestController@getInvoice')->name('invoice');
    Route::get('/cek-pesanan', function () {return view('cekPesanan');})->name('cek.pesanan');
    Route::post('/hasil-invoice', 'GuestController@cekInvoice')->name('hasil.invoice');
    Route::post('/upload-payment', 'GuestController@uploadPayment')->name('upload.payment');
    Route::get('/invoice-view/{id}', 'GuestController@invoiceView')->name('invoice.view');
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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::name('dashboard.')->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        })->name('index');

        //hari ini
        Route::get('/check-in', 'Admin\ReservasiController@getCheckIn')->name('checkin');
        Route::get('/check-in/edit', 'Admin\ReservasiController@editCheckIn')->name('checkin.edit');
        Route::post('/check-in/edit', 'Admin\ReservasiController@saveCheckIn')->name('checkin.save');
        Route::get('/check-in/set/menginap', 'Admin\ReservasiController@setMenginap')->name('checkin.set.menginap');

        // Route::get('/menginap', function () {
        //     return view('dashboard.hariIni.menginap');
        // })->name('menginap');
        Route::get('/menginap', 'Admin\ReservasiController@getSedangMenginap')->name('menginap');
        Route::get('/menginap/set/checkout', 'Admin\ReservasiController@setCheckOut')->name('menginap.set.checkout');
        // Route::get('/check-out', function () {
        //     return view('dashboard.hariIni.checkOut');
        // })->name('checkout');
        Route::get('/check-out', 'Admin\ReservasiController@getCheckOut')->name('checkout');

        //reservasi
        Route::get('/reservasi', 'Admin\ReservasiController@index')->name('reservasi');
        Route::post('/reservasi', 'Admin\ReservasiController@form')->name('form.reservasi');
        Route::get('/reservasi/kamar', 'Admin\ReservasiController@getKamar')->name('get.kamar');
        Route::post('/reservasi/pembayaran', 'Admin\ReservasiController@pembayaran')->name('reservasi.pembayaran');
        Route::post('/reservasi/pembayaran/upload', 'Admin\ReservasiController@saveReservasiToDB')->name('save.pembayaran');
        Route::post('/reservasi/pembayaran/konfirmasi', 'Admin\ReservasiController@konfirmasiPembayaran')->name('konfirmasi.pembayaran');

        Route::get('/list-reservasi', 'Admin\ReservasiController@list')->name('list.reservasi');
        Route::get('/list-reservasi/detail', 'Admin\ReservasiController@detail')->name('detail.reservasi');

        Route::get('/reservasi/history', 'Admin\ReservasiController@history')->name('history.reservasi');

        //housekeeping
        Route::get('/penjadwalan', 'Admin\HouseKeepingController@penjadwalan')->name('penjadwalan');
        Route::get('/logbook', 'Admin\HouseKeepingController@logbook')->name('logbook');
        Route::get('/cleaning', 'Admin\HouseKeepingController@cleaning')->name('cleaning');


        //review
        Route::get('/review', 'Admin\ReservasiController@history')->name('review');

        //manajemen
        Route::get('/profile', 'Admin\ManajemenController@profile')->name('manajemen.profile');
        Route::post('/edit-profile', 'Admin\ManajemenController@editProfile')->name('manajemen.edit.profile');
        Route::get('/kamar', 'Admin\ManajemenController@kamar')->name('manajemen.kamar');
        Route::post('/tambah-kamar', 'Admin\ManajemenController@tambahKamar')->name('manajemen.tambah.kamar');
        Route::post('/edit-kamar', 'Admin\ManajemenController@editKamar')->name('manajemen.edit.kamar');
        Route::delete('/delete-kamar/{id}', 'Admin\ManajemenController@deleteKamar')->name('manajemen.delete.kamar');
        Route::get('/tarif', 'Admin\ManajemenController@tarif')->name('manajemen.tarif');
        Route::post('/edit-tarif', 'Admin\ManajemenController@editTarif')->name('manajemen.edit.tarif');
        Route::get('/fasilitas', 'Admin\ManajemenController@fasilitas')->name('manajemen.fasilitas');
        Route::post('/tambah-fasilitas', 'Admin\ManajemenController@tambahFasilitas')->name('<manajemen class="tambah"></manajemen>fasilitas');
        Route::get('/karyawan', 'Admin\ManajemenController@karyawan')->name('manajemen.karyawan');
        Route::post('/tambah-karyawan', 'Admin\ManajemenController@tambahKaryawan')->name('manajemen.tambah.karyawan');
        Route::get('/karyawan/detail', 'Admin\ManajemenController@karyawanDetail')->name('manajemen.karyawan.detail');
        Route::get('/akun', 'Admin\ManajemenController@akun')->name('manajemen.akun');

        //bantuan
        Route::get('/bantuan', function () {
            return view('dashboard.bantuan');
        })->name('bantuan');
    });
});
// end route frontend

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin/kamar', 'KamarController@index');
    Route::post('/admin/kamar/store', 'KamarController@storeKamar');
    Route::get('/admin/kamar/edit/{id}', 'KamarController@editKamar');
    Route::post('/admin/kamar/update', 'KamarController@updateKamar');
    Route::delete('/admin/kamar/delete/{id}', 'KamarController@deleteKamar');
});

Route::get('/home', 'HomeController@index')->name('home');

// Auth route
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
