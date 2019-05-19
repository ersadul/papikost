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
                        <input type="text" class="form-control" readonly value="{{ $invoice->nama }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. Telephone</label>
                        <input type="number" class="form-control" readonly value="{{ $invoice->phone }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" readonly value="{{ $invoice->email }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Permintaan Khusus</label>
                        <textarea class="form-control" readonly rows="3" name="khusus">{{ $invoice->permintaan_khusus }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ID Kamar</label>
                        <input class="form-control" readonly value="1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Check-in</label>
                        <input class="form-control" readonly value="{{ $invoice->check_in }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Check-out</label>
                        <input class="form-control" readonly 
                        value='{{ $invoice->check_out }}'>
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
                        <input type="email" class="form-control" readonly 
                            value="{{ $invoice->tipe_payment == 0 ? $invoice->nomor_transaksi : '-' }}">
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
                        <form action="{{ route('dashboard.konfirmasi.pembayaran') }}" id="confirm-payment" method="POST">
                            @csrf
                            <input type="hidden" name="invoice_id" value="{{ $invoice->id }}">
                            <input type="text" class="form-control" name="nomor_transaksi" required
                                {{ $readonly || is_null($invoice->bukti_pembayaran_file) ? "readonly" : ""}}
                                value="{{ $invoice->tipe_payment == 1 ? $invoice->nomor_transaksi : '-' }}">
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        @if(!is_null($invoice->bukti_pembayaran_file))
                            <p>Lihat bukti pembayaran <a href="#" data-toggle="modal" data-target="#bukti-pembayaran">disini</a></p>
                            <div class="modal fade" id="bukti-pembayaran">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Default Modal</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src='{{ asset("storage/$invoice->bukti_pembayaran_file") }}' style="width:100%">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                    </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        @else
                            <p>Belum ada bukti pembayaran terunggah</a></p>
                        @endif
                    </div>
                    <button form="confirm-payment" class="btn btn-primary btn-flat pull-right"
                        {{ $readonly || is_null($invoice->bukti_pembayaran_file) ? "disabled" : ""}}>
                        Konfirmasi
                    </button>
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
                                <input type="checkbox" name="cash" id="cash"
                                    {{ $invoice->tipe_payment == 2 ? "checked" : ""}} disabled> Lunas
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection