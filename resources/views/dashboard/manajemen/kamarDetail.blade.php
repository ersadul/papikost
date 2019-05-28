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
                        <th>Thumbnail</th>
                    </tr>
                    <tr>
                        <td>{{ $kamar->nama_kamar }}</td>
                        <td>{{ $kamar->nama_tipe }}</td>
                        <td style="width: 300px">
                            @if(is_null($kamar->thumbnail) || $kamar->thumbnail == "")
                                <img class="img-responsive" src="{{ asset('template/img/room/1.png') }}" style="width: 200px">
                            @else
                                <img class="img-responsive" src="{{ asset('storage/'.$kamar->thumbnail) }}" style="width: 200px">
                            @endif
                        </td>
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
                    @foreach($gambarKamar as $gk)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset('kamar') }}/{{$gk->gambar_file}}"></td>
                        <td>{{$gk->nama_gambar}}</td>
                        <td>
                            <button type="button" id="btn-rev" class="btn btn-info btn-flat btn-sm" data-toggle="modal"
                                data-target="#edit-gambar-{{$gk->id}}"><i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-flat">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach

                    <!-- <tr>
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
                    </tr> -->
                    
                </tbody>
            </table>
        </div>
    </div>
    @foreach($gambarKamar as $gk)
    <div class="modal fade" id="edit-gambar-{{$gk->id}}">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.edit.gambar.kamar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="editGambarID" value="{{$gk->id}}">
                <input type="text" name="editkamarID" value="{{$gk->kamar_id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit ey Gambar</h4>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('kamar') }}/{{$gk->gambar_file}}" style="width:500px">
                        <div class="form-group">
                            <label>File Gambar</label>
                            <input type="file" name="editGambarKamar" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="editketerangan" class="form-control" required rows="3"></textarea>
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
    <div class="modal fade" id="gambar">
        <div class="modal-dialog">
            <form action="{{route('dashboard.manajemen.tambah.gambar.kamar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="idTambahGambar" value="{{ $kamar->kamar_id }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Gambar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>File Gambar</label>
                            <input type="file" name="tambahGambarKamar" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="tambahketerangan" class="form-control" required rows="3"></textarea>
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
            <form action="{{route('dashboard.manajemen.edit.kamar')}}" method="post" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label>Thumbnail</label>
                            @if(is_null($kamar->thumbnail) || $kamar->thumbnail == "")
                                <img class="img-responsive" src="{{ asset('template/img/room/1.png') }}" style="width: 200px">
                            @else
                                <img class="img-responsive" src="{{ asset('storage/'.$kamar->thumbnail) }}" style="width: 200px">
                            @endif
                            <input type="file" name="editThumbnail" class="form-control" autocomplete="off">
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