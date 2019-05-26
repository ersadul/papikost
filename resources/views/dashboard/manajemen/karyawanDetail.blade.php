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
        Karyawan Detail
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/">Karyawan</a></li>
        <li class="active">Karyawan Detail</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn bg-navy btn-flat"><i class="fa fa-arrow-left"></i> Kembali</a>
            <form action="{{ route('dashboard.manajemen.karyawan.detail.delete')}}" method="post">
                @csrf
                <input type="hidden" name="idKamarDelete" value="{{$karyawanDetail->id}}">
                <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-danger btn-flat pull-right" style="margin-left: 5px"><i class="fa fa-remove"></i></a>
            </form>
            <a href="#"data-toggle="modal" data-target="#edit" class="btn btn-info btn-flat pull-right"><i class="fa fa-pencil"></i></a>
        </div>
        <div class="box-body">
            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->nama}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No. HP</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->phone_number}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Job Role</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->job_role}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->tempat_lahir}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->tanggal_lahir}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" readonly rows="3">{{$karyawanDetail->alamat_tinggal}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->jenis_kelamin}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Agama</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->agama}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Riwayat Pendidikan</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="SD : {{$karyawanDetail->sd}}, SMP : {{$karyawanDetail->smp}}, SMA : {{$karyawanDetail->sma}}, Kuliah : {{$karyawanDetail->perguruan_tinggi}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pengalaman Kerja</label>
                        <div class="col-sm-10">
                            <input class="form-control" readonly value="{{$karyawanDetail->pengalaman_kerja}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit">
        <div class="modal-dialog modal-lg">
            <form action="{{route('dashboard.manajemen.karyawan.detail.edit')}}" method="post">
                @csrf
                <input type="hidden" name="idKaryawanEdit" value="{{$karyawanDetail->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Karyawan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="namaEdit" value="{{$karyawanDetail->nama}}">
                        </div>
                        <div class="form-group">
                            <label>No. HP</label>
                            <input class="form-control" name="phoneEdit" value="{{$karyawanDetail->phone_number}}">
                        </div>
                        <div class="form-group">
                            <label>Job Role</label>
                            <input class="form-control" name="jobEdit" value="{{$karyawanDetail->job_role}}">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="emailEdit" value="{{$karyawanDetail->email}}">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input class="form-control" name="tempatLahirEdit" value="{{$karyawanDetail->tempat_lahir}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control datepicker" name="tanggalLahirEdit" value="{{$karyawanDetail->tanggal_lahir}}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamatEdit" class="form-control" rows="3">{{$karyawanDetail->alamat_tinggal}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input class="form-control" name="jkEdit" value="{{$karyawanDetail->jenis_kelamin}}">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <input class="form-control" name="spEdit" value="{{$karyawanDetail->status_perkawinan}}">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input class="form-control" name="agamaEdit" value="{{$karyawanDetail->agama}}">
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pendidikan</label>
                            <input class="form-control" name="sdEdit" value="{{$karyawanDetail->sd}}">
                            <input class="form-control" name="smpEdit" value="{{$karyawanDetail->smp}}">
                            <input class="form-control" name="smaEdit" value="{{$karyawanDetail->sma}}">
                            <input class="form-control" name="kuliahEdit" value="{{$karyawanDetail->perguruan_tinggi}}">
                        </div>
                        <div class="form-group">
                            <label>Pengalaman Kerja</label>
                            <input class="form-control" name="pengalamanEdit" value="{{$karyawanDetail->pengalaman_kerja}}">
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

@section('script')
<script>
    $('.datepicker').datepicker({
        format : 'yyyy-mm-dd'
    });
</script>
@endsection