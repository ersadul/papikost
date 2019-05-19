@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('tarif')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Tarif
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tarif</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="25px">No</th>
                            <th width="40%">Kamar</th>
                            <th>Tipe</th>
                            <th>Harga Asli</th>
                            <th>Harga Promo</th>
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
                                @if($k->harga == 0)
                                    Harga Belum ditentukan
                                @else 
                                    Rp. {{$k->harga}}
                                @endif
                            </td>
                            <td>
                                @if($k->harga == 0)
                                    Harga Belum ada, jadi gak ada promo
                                @else 
                                    Rp. {{$k->harga}}
                                @endif
                            </td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#edit-harga_{{ $k->id }}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-harga">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.edit.tarif')}}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Harga</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kamar</label>
                            <input type="text" class="form-control" required autocomplete="off" value="Kamar 1" disabled>
                        </div>
                        <div class="form-group">
                            <label>Harga Asli</label>
                            <input type="text" class="form-control" required autocomplete="off" value="250000">
                        </div>
                        <div class="form-group">
                            <label>Harga Promo</label>
                            <input type="text" class="form-control" required autocomplete="off" value="230000">
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