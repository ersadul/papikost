@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('kamar')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        {{ $kamar->nama_kamar }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('dashboard.manajemen.kamar') }}">Kamar</a></li>
        <li class="active">{{ $kamar->nama_kamar }}</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">Info Kamar</h3>
            <button type="button" id="btn-rev" class="btn btn-info btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#edit"><i class="fa fa-pencil"></i>
            </button>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Kamar</th>
                        <th>Tipe</th>
                    </tr>
                    <tr>
                        <td>{{ $kamar->nama_kamar }}</td>
                        <td>{{ $kamar->nama_tipe }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">Koleksi Foto {{ $kamar->nama_kamar }}</h3>
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#gambar"><i class="fa fa-plus-circle"></i> Tambah Gambar
            </button>
        </div>
        <div class="box-body">
            <table class="table table-bordered" id="tb-detail-kamar">
                <tbody>
                    <tr>
                        <th width="50px">No.</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('template/img/room/1.png') }}"></td>
                        <td>Keterangan atau nama dari gambar tersebut</td>
                        <td>
                            <button type="button" id="btn-rev" class="btn btn-info btn-flat btn-sm" data-toggle="modal"
                                data-target="#edit-gambar"><i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="{{ asset('template/img/room/2.png') }}"></td>
                        <td>Keterangan atau nama dari gambar tersebut</td>
                        <td>
                            <button type="button" id="btn-rev" class="btn btn-info btn-flat btn-sm" data-toggle="modal"
                                data-target="#edit-gambar"><i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="edit-gambar">
        <div class="modal-dialog">
            <form action="#" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Gambar</h4>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('template/img/room/2.png') }}">
                        <div class="form-group">
                            <label>File Gambar</label>
                            <input type="file" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" required rows="3"></textarea>
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
    <div class="modal fade" id="gambar">
        <div class="modal-dialog">
            <form action="#" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Gambar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>File Gambar</label>
                            <input type="file" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" required rows="3"></textarea>
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
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.edit.kamar')}}" method="post">
                @csrf
                <input type="hidden" name="idKamarEdit" value="{{$kamar->kamar_id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Informasi Kamar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kamar</label>
                            <input type="text" name="editKamar" id="editKamarID" class="form-control" required
                                autocomplete="off" value="{{$kamar->nama_kamar}}">
                        </div>
                        <div class="form-group">
                            <label>Tipe Kamar</label>
                            <select name="editTipe" id="editTipeID" class="form-control" required autocomplete="off">
                                <option disabled>Pilih Tipe Kamar</option>
                                @foreach($tipeKamar as $tk)
                                <option value="{{$tk->id}}"
                                    {{ $tk->id == $kamar->tipe_kamar_id ? 'selected="selected"' : '' }}>
                                    {{$tk->nama_tipe}}
                                </option>
                                @endforeach
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