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
                            <th width="40%">Ruangan</th>
                            <th>Tipe</th>
                            <th>Harga Asli</th>
                            <!-- <th>Harga Promo</th> -->
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
                            <!-- <td>
                                @if(is_null($k->harga_promo))
                                    Harga Belum ada, jadi gak ada promo
                                @else 
                                    Rp. {{$k->harga_promo}}
                                @endif
                            </td> -->
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal" data-target="#edit-harga-{{$k->id}}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach($kamar as $k)
    <div class="modal fade" id="edit-harga-{{$k->id}}">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.edit.tarif')}}" method="post">
                @csrf
                <input type="hidden" name="idTarifEdit" value="{{$k->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Harga</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" class="form-control" required autocomplete="off" value="{{$k->nama_kamar}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Harga Asli</label>
                            <input type="text" name="editHargaAsli" class="form-control" required autocomplete="off" value="{{$k->harga}}">
                        </div>
                        <!-- <div class="form-group">
                            <label>Harga Promo</label>
                            <input type="text" name="editHargaPromo"  class="form-control" required autocomplete="off" value="{{$k->harga_promo}}">
                        </div> -->
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