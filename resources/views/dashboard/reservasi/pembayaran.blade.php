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
        Konfirmasi Pembayaran
    </h1>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nama Pemesan</th>
                        <th>No. Kamar</th>
                        <th>Check-in</th>
                        <th>Lama Menginap</th>
                        <th>Total Harga</th>
                    </tr>
                    <tr>
                        <td>
                            {{ $request->nama }} 
                        </td>
                        <td>{{ $request->room }}</td>
                        <td>{{ $request->date }}</td>
                        <td>{{ $request->range }}</td>
                        <td>Rp. {{ $kamar->harga * $request->range }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{ route('dashboard.save.pembayaran') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="tipe">
        <input type="hidden" name="nama" value="{{ $request->nama }}">
        <input type="hidden" name="room" value="{{ $request->room }}">
        <input type="hidden" name="date" value="{{ $request->date }}">
        <input type="hidden" name="range" value="{{ $request->range }}">
        <input type="hidden" name="email" value="{{ $request->email }}">
        <input type="hidden" name="telp" value="{{ $request->telp }}">
        <input type="hidden" name="khusus" value="{{ $request->khusus }}">
        <input type="hidden" name="hargaAkhir" value="{{ $kamar->harga * $request->range }}">
        <div class="row" id="payment">
            <div class="col-md-4">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <p class="box-title">Debit</p>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nomor Transaksi</label>
                            <input type="text" class="form-control" name="debit" id="debit">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button disabled id="btn-debit" type="submit" class="btn btn-primary btn-flat pull-right">Simpan</button>
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
                            <input type="text" class="form-control" name="transfer" id="transfer">
                        </div>
                        <div class="form-group">
                            <label>Bukti Pembayaran</label>
                            <input type="file" class="form-control" name="buktiPembayaran" id="bukti">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button disabled id="btn-transfer" type="submit" class="btn btn-primary btn-flat pull-right">Simpan</button>
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
                                    <input type="checkbox" name="cash" id="cash"> Lunas
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button disabled id="btn-cash" type="submit" class="btn btn-primary btn-flat pull-right">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection

@section('script')
<script>
$('#debit').keyup(function(){
    if($('#debit').val() != ''){
        $('#btn-debit').prop('disabled', false);
        $('#tipe').val('debit');
    }else{
        $('#btn-debit').prop('disabled', true);
    }
});
$('#transfer').keyup(function(){
    if($('#transfer').val() != ''){
        $('#btn-transfer').prop('disabled', false);
        $('#tipe').val('transfer');
    }else{
        $('#btn-transfer').prop('disabled', true);
    }
});
$('#cash').change(function(){
    if($('#cash').prop('checked')){
        $('#btn-cash').prop('disabled', false);
        $('#tipe').val('cash');
    }else{
        $('#btn-cash').prop('disabled', true);
    }
});
</script>
@endsection