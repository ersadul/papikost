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
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Hotel</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Negara</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Panduan Lokasi</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bank</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Bank Cabang</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Nama Penerima</label>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Logo Hotel</label>
                            <input type="file" class="form-control">
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