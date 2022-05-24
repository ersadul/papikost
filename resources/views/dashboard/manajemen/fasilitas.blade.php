@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('fasilitas')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Fasilitas
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Fasilitas</li>
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
                            <th>Fasilitas</th>
                            <th width="120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kamar as $k)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$k->nama_kamar}}</td>
                            <td>
                                <ul>
                                    @foreach($fasilitasKamar as $fk)
                                        @if($fk->kamar_id == $k->id)
                                            <li>{{$fk->fasilitas->jenis_fasilitas}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#fasilitas-{{$k->id}}"><i class="fa fa-pencil"></i></a>
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
    <div class="modal fade" id="fasilitas-{{$k->id}}">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.tambah.fasilitas')}}" method="post">
                @csrf
                <input type="hidden" name="idKamarTambahFasilitas" value="{{$k->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" id="fasilitas-{{$k->kamar_id}}" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Fasilitas</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" class="form-control" required autocomplete="off"
                                value="{{$k->nama_kamar}}" disabled>
                        </div>
                        <div class="form-group">
                            Fasilitas ruangan Anda
                            <select name="fasilitasKamar[]" class="form-control select2" multiple="multiple"
                                style="width: 100%;">
                                @foreach ($fasilitas as $f)
                                    <option value="{{ $f->id }}" 
                                        @foreach($fasilitasKamar as $fk)
                                            @if($fk->tipe_fasilitas_id == $f->id)
                                                selected
                                            @endif
                                        @endforeach
                                    >
                                        {{ $f->jenis_fasilitas }}
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
    @endforeach
</section>
@endsection