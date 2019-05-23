@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('karyawan')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Karyawan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Karyawan</li>
    </ol>
</section>

<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#karyawan"><i class="fa fa-plus-circle"></i> Tambah Karyawan
            </button>
        </div>
        <div class="box-body">
            <div class="table-responsive" id="tb-custom">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $k)
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <h4> {{$k->nama}}</h4>
                                                    <p>{{$k->job_role}}</p>
                                                    <form action="{{ route('dashboard.manajemen.karyawan.detail')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="idKaryawan" value="{{$k->id}}">
                                                        <a href="#" onclick="$(this).closest('form').submit()" class="pull-right"> Detail <i class="fa fa-chevron-circle-right"></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="karyawan">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.tambah.karyawan')}}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Karyawan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="tambahNama" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="tambahPhone" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Job Role</label>
                            <input type="text" name="tambahJob" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="tambahEmail" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="tambahTTL" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="tambahAlamat" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="tambahJK" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <input type="text" name="tambahSP" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" name="tambahAgama" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Riwayat Pendidikan</label>
                            <input type="text" name="tambahSD" placeholder="SD" class="form-control" required autocomplete="off">
                            <input type="text" name="tambahSMP" placeholder="SMP" class="form-control" required autocomplete="off">
                            <input type="text" name="tambahSMA" placeholder="SMA" class="form-control" required autocomplete="off">
                            <input type="text" name="tambahKuliah" placeholder="Perguruan Tinggi" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pengalaman Kerja</label>
                            <input type="text" name="tambahKerja" class="form-control" required autocomplete="off">
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