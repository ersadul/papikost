@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('profile')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Profile
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <form action="{{route('dashboard.manajemen.edit.profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="IDProfileHotel" value="{{$profileHotel->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Tempat Penyewaan</label>
                            <input type="text" name="nama_profile" class="form-control" autocomplete="off" value="{{$profileHotel->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat_profile" class="form-control" autocomplete="off" value="{{$profileHotel->alamat}}" required>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" name="provinsi_profile" class="form-control" autocomplete="off" value="{{$profileHotel->provinsi}}" required>
                        </div>
                        <div class="form-group">
                            <label>Negara</label>
                            <input type="text" name="negara_profile" class="form-control" autocomplete="off" value="{{$profileHotel->negara}}" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Panduan Lokasi</label>
                            <textarea name="lokasi_profile" class="form-control" rows="3" required>{{$profileHotel->panduan_lokasi}}</textarea>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="form-group">
                            <label>Bank</label>
                            <input type="text" name="bank_profile" class="form-control" autocomplete="off" value="{{$profileHotel->bank}}" required>
                        </div>
                        <div class="form-group">
                            <label>Bank Cabang</label>
                            <input type="text" name="cabang_profile" class="form-control" autocomplete="off" value="{{$profileHotel->bank_cabang}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening</label>
                            <input type="text" name="nomor_profile" class="form-control" autocomplete="off" value="{{$profileHotel->nomor_rekening}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Penerima</label>
                            <input type="text" name="penerima_profile" class="form-control" autocomplete="off" value="{{$profileHotel->nama_penerima}}" required>
                        </div> -->
                        <div class="form-group">
                            <label>Logo Tempat</label>
                            <input type="file" name="gambar_profile" class="form-control">
                            <img style="margin-top: 20px"
                                src="{{ is_null($profileHotel->logo_hotel_file) || $profileHotel->logo_hotel_file == '' ? asset('template/img/logo/logo.png') : asset('storage/'.$profileHotel->logo_hotel_file) }}">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection