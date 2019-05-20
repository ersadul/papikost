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
        Kamar
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kamar</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#kamar"><i class="fa fa-plus-circle"></i> Tambah Kamar
            </button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="25px">No</th>
                            <th width="70%">Kamar</th>
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
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal" data-target="#edit-kamar-{{$k->kamar_id}}"><i class="fa fa-pencil"></i></a>
                                    <!-- DELETE masih fail -->
                                    <button type="submit" form="delete-kamar-{{ $k->kamar_id }}" class="btn btn-sm btn-danger btn-flat">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    <!-- DELETE masih fail -->
                                    <!-- DELETE masih fail -->
                                    <form id="delete-kamar-{{ $k->kamar_id }}" action="{{ route('dashboard.manajemen.delete.kamar') }}" method="post" style='visibility: hidden'>
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $k->kamar_id }}" >
                                    </form>
                                    <!-- DELETE masih fail -->

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
                        <h4 class="modal-title">Tambah Kamar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kamar</label>
                            <input type="text" name="tambahKamar" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Tipe Kamar</label>
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
    @foreach($kamar as $k)
    <div class="modal fade" id="edit-kamar-{{$k->kamar_id}}">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.edit.kamar')}}" method="post">
                @csrf
                <input type="hidden" name="idKamarEdit" value="{{$k->kamar_id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Kamar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kamar</label>
                            <input type="text" name="editKamar" id="editKamarID" class="form-control" required autocomplete="off" value="{{$k->nama_kamar}}">
                        </div>
                        <div class="form-group">
                            <label>Tipe Kamar</label>
                            <select name="editTipe" id="editTipeID" class="form-control" required autocomplete="off">
                                <option disabled>Pilih Tipe Kamar</option>
                                @foreach($tipeKamar as $tk)
                                    <option value="{{$tk->id}}" {{ $tk->id == $k->tipe_kamar_id ? 'selected="selected"' : '' }} >{{$tk->nama_tipe}}</option>
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
    @endforeach
</section>
@endsection