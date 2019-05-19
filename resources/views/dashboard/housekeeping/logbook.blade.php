@extends('layouts.dashboard')
@section('housekeeping')
active
@endsection
@section('logbook')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Logbook
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Logbook</li>
    </ol>
</section>

<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#data"><i class="fa fa-plus-circle"></i> Tambah Data</button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10px">No Kamar</th>
                            <th>Tanggal</th>
                            <th>Customer</th>
                            <th>Keterangan</th>
                            <th>Jumlah Barang</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20 Mei 2019</td>
                            <td>Nama Customer</td>
                            <td>Laptop merk XYZ di bawah kolong tempat tidur</td>
                            <td>1 Unit</td>
                            <td><span class="label bg-green">Ditemukan</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>20 Mei 2019</td>
                            <td>Nama Customer</td>
                            <td>Laptop merk XYZ di bawah kolong tempat tidur</td>
                            <td>1 Unit</td>
                            <td><span class="label bg-red">Hilang</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>20 Mei 2019</td>
                            <td>Nama Customer</td>
                            <td>Laptop merk XYZ di bawah kolong tempat tidur</td>
                            <td>1 Unit</td>
                            <td><span class="label bg-orange">Dipinjam</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="data">
        <div class="modal-dialog">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Data Logbook</h4>
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
                            <label>Customer</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" required autocomplete="off">
                                <option selected disabled></option>
                                <option>Barang Hilang</option>
                                <option>Barang Ditemukan</option>
                                <option>Barang Dipinjamkan</option>
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