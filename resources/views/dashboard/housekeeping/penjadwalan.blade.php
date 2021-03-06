@extends('layouts.dashboard')
@section('housekeeping')
active
@endsection
@section('penjadwalan')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Penjadwalan Karyawan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penjadwalan Karyawan</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#penjadwalan"><i class="fa fa-plus-circle"></i> Penjadwalan Baru</button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10px">No Kamar</th>
                            <th>Tanggal</th>
                            <th>Hari</th>
                            <th>Shift</th>
                            <th>Nama Pegawai</th>
                            <th width="10px">Drop</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penjadwalanAll as $pa)
                        <tr>
                            <td>{{$pa->nama_kamar}}</td>
                            <td>{{$pa->tanggal_jadwal}}</td>
                            @php
                                $days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                                $dayIndex = date('w', strtotime($pa->tanggal_jadwal));
                                $dayName = $days[$dayIndex];
                            @endphp
                            <td>{{ $dayName }}</td>
                            <td>
                                @if($pa->shift == 1)
                                    Shift 1 : 06.00 pagi - 14.00 siang
                                @elseif($pa->shift == 2)
                                    Shift 2 : 12.00 siang - 20.00 malam
                                @elseif($pa->shift == 3)
                                    Shift 3 : 20.00 siang - 06.00 pagi
                                @endif
                                <!-- {{$pa->shift}} -->
                            </td>
                            <td>
                                {{$pa->nama}}
                            </td>
                            <td>
                                <form action="{{route('dashboard.penjadwalan.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="idDeletePenjadwalan" value="{{$pa->id}}">
                                    <a href="#"  onclick="$(this).closest('form').submit()" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="penjadwalan">
        <div class="modal-dialog">
            <form action="{{route('dashboard.penjadwalan.tambah')}}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Penjadwalan Karyawan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No. Kamar (pilih 1 kamar)</label>
                            <select name="pilihKamar[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                style="width: 100%;">
                                    @foreach($seluruhKamar as $sk)
                                        <option value="{{$sk->id}}">{{$sk->nama_kamar}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" name="jadwalTanggal" class="form-control" required autocomplete="off" id="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Shift Karyawan</label>
                            <select name="jadwalShift[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                style="width: 100%;">
                                <option value="1">Pagi</option>
                                <option value="2">Siang</option>
                                <option value="3">Malam</option>
                                <!-- <option>Nama Karyawan 2</option>
                                <option>Nama Karyawan 3</option>
                                <option>Nama Karyawan 4</option>
                                <option>Nama Karyawan 5</option>
                                <option>Nama Karyawan 6</option>
                                <option>Nama Karyawan 7</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <select name="jadwalKaryawan[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                style="width: 100%;">
                                @foreach($karyawanAll as $ka)
                                <option value="{{$ka->id}}">{{$ka->nama}} dan idnya {{$ka->id}}</option>
                                @endforeach
                                <!-- <option>Nama Karyawan 2</option>
                                <option>Nama Karyawan 3</option>
                                <option>Nama Karyawan 4</option>
                                <option>Nama Karyawan 5</option>
                                <option>Nama Karyawan 6</option>
                                <option>Nama Karyawan 7</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left btn-flat"
                            data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection