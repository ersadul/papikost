@extends('layouts.dashboard')
@section('reservasi')
active
@endsection
@section('list.reservasi')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Detail Reservasi #123912471
    </h1>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Nama Tamu</label>
                        <input type="text" class="form-control" readonly value="Pelanggan 1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. Telephone</label>
                        <input type="number" class="form-control" readonly value="08123456789">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" readonly value="pelanggan@domain.com">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Permintaan Khusus</label>
                        <textarea class="form-control" readonly rows="3" name="khusus">Selimut tambah 1</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Kamar</label>
                        <input class="form-control" readonly value="1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Check-in</label>
                        <input class="form-control" readonly value="2019-05-05">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Check-out</label>
                        <input class="form-control" readonly value="2019-05-07">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="payment">
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <p class="box-title">Debit</p>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nomor Transaksi</label>
                        <input type="email" class="form-control" readonly value="Ada jika lewat debit">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <p class="box-title">Transfer</p>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nomor Transaksi</label>
                        <input type="text" class="form-control" readonly value="Ada jika reservasi online">
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        <p>Lihat bukti pembayaran <a href="#">disini</a></p>
                    </div>
                    <button class="btn btn-primary btn-flat pull-right">Konfirmasi</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <p class="box-title">Cash</p>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Status Pembayaran</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="cash" id="cash" checked disabled> Lunas
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection