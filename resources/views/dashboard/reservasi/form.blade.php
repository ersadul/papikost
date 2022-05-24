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
            <form action="{{ $checkInMode ? route('dashboard.checkin.save') : route('dashboard.reservasi.pembayaran') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required name="nama" autocomplete="off"
                                value="{{ $checkInMode ? $invoice->nama : '' }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No. Telephone</label>
                            <input type="number" class="form-control" required name="telp" autocomplete="off"
                                value="{{ $checkInMode ? $invoice->phone : '' }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" required name="email" autocomplete="off"
                                value="{{ $checkInMode ? $invoice->email : '' }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Permintaan Khusus</label>
                            <textarea class="form-control" rows="3" name="khusus">{{ $checkInMode ? $invoice->permintaan_khusus : '' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ID Ruangan</label>
                            <input class="form-control" required value="{{ $checkInMode ? $invoice->kamar_id : $request->room }}" name="room" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Masuk</label>
                            <input class="form-control" required value="{{ $checkInMode ? $invoice->check_in : $request->date }}" name="date" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lama Jam</label>
                            <input type="number" class="form-control" required name="range" autocomplete="off"
                                {{ $checkInMode ? 'readonly' : '' }}
                                value="{{ $checkInMode ? $invoice->lama_menginap : '' }}">
                        </div>
                    </div>
                </div>
                <div class="form-bottom">
                    @if($checkInMode)
                        <button type="submit" class="btn btn-success btn-flat pull-right">Check-in</button>
                    @else
                        <button type="submit" class="btn btn-success btn-flat pull-right">Lanjut Pembayaran</button>
                        <a href="{{ route('dashboard.reservasi') }}" class="btn btn-default btn-flat">Batal</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
@endsection