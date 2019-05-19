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
                            <th>Jam</th>
                            <th width="10px">Shift</th>
                            <th>Nama Pegawai</th>
                            <th width="10px">Drop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20 Mei 2019</td>
                            <td>Minggu</td>
                            <td>09:00</td>
                            <td>1</td>
                            <td>Nama Pegawai 1, Nama Pegawai 2</td>
                            <td><a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>20 Mei 2019</td>
                            <td>Minggu</td>
                            <td>09:00</td>
                            <td>1</td>
                            <td>Nama Pegawai 1, Nama Pegawai 2</td>
                            <td><a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>20 Mei 2019</td>
                            <td>Minggu</td>
                            <td>09:00</td>
                            <td>1</td>
                            <td>Nama Pegawai 1, Nama Pegawai 2</td>
                            <td><a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>20 Mei 2019</td>
                            <td>Minggu</td>
                            <td>09:00</td>
                            <td>1</td>
                            <td>Nama Pegawai 1, Nama Pegawai 2</td>
                            <td><a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>20 Mei 2019</td>
                            <td>Minggu</td>
                            <td>09:00</td>
                            <td>1</td>
                            <td>Nama Pegawai 1, Nama Pegawai 2</td>
                            <td><a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="penjadwalan">
        <div class="modal-dialog">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Penjadwalan Karyawan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No. Kamar</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control" required autocomplete="off" id="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Jam</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Shift</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                style="width: 100%;">
                                <option>Nama Karyawan 1</option>
                                <option>Nama Karyawan 2</option>
                                <option>Nama Karyawan 3</option>
                                <option>Nama Karyawan 4</option>
                                <option>Nama Karyawan 5</option>
                                <option>Nama Karyawan 6</option>
                                <option>Nama Karyawan 7</option>
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