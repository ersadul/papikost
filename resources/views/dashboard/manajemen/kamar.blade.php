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
        Ruangan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ruangan</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#kamar"><i class="fa fa-plus-circle"></i> Tambah Ruangan
            </button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="25px">No</th>
                            <th width="70%">Ruangan</th>
                            <th>Tipe</th>
                            <th width="120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kamar as $k)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$k->nama_kamar}}</td>
                            <td>{{$k->nama_tipe}}</td>
                            <td>
                                <div class="btn-action">
                                    <a href="{{ route('dashboard.manajemen.detail.kamar', $k->kamar_id) }}" class="btn btn-sm btn-success btn-flat" data-toggle="modal"><i class="fa fa-eye"></i></a>
                                    <button type="submit" form="delete-kamar-{{ $k->kamar_id }}" class="btn btn-sm btn-danger btn-flat">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    <form id="delete-kamar-{{ $k->kamar_id }}" action="{{ route('dashboard.manajemen.delete.kamar') }}" method="post" style='visibility: hidden'>
                                        @csrf
                                        <input type="hidden" name="IDKamarDelete" value="{{ $k->kamar_id }}" >
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kamar">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.tambah.kamar')}}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Ruangan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" name="tambahKamar" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Tipe Ruangan</label>
                            <select name="tambahTipeKamar" class="form-control" required autocomplete="off">
                                <option selected disabled></option>
                                @foreach($tipeKamar as $tk)
                                    <option value="{{$tk->id}}">{{$tk->nama_tipe}}</option>
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