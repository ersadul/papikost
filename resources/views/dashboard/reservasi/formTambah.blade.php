@extends('layouts.dashboard')
@section('reservasi')
active
@endsection
@section('subreservasi')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Buat Reservasi
    </h1>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <form action="{{ route('dashboard.reservasi.pembayaran') }}" method="post">
                @csrf
                <input type="hidden" name="tambahMenginapID" value="{{ $invoice->id }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" class="form-control" required name="nama" autocomplete="off"
                                value="{{ $invoice->nama }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No. Telephone</label>
                            <input type="number" class="form-control" required name="telp" autocomplete="off"
                                value="{{ $invoice->phone }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" required name="email" autocomplete="off"
                                value="{{ $invoice->email }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Permintaan Khusus</label>
                            <textarea class="form-control" rows="3" name="khusus">{{ $invoice->permintaan_khusus }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ID Kamar</label>
                            <input class="form-control" required value="{{ $invoice->kamar_id }}" name="room" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Check-in</label>
                            <input class="form-control" required value="{{ date('Y-m-d') }}" name="date" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lama Hari</label>
                            <input type="number" class="form-control" required name="range" autocomplete="off" value="">
                        </div>
                    </div>
                </div>
                <div class="form-bottom">
                    <button type="submit" class="btn btn-success btn-flat pull-right">Lanjut Pembayaran</button>
                    <a href="{{ route('dashboard.reservasi') }}" class="btn btn-default btn-flat">Batal</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection