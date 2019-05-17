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
        Karyawan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Karyawan</li>
    </ol>
</section>

<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="table-responsive" id="tb-custom">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <h4>Nama Pegawai</h4>
                                                    <p>Jabatan</p>
                                                    <a href="{{ route('dashboard.manajemen.karyawan.detail') }}" class="pull-right">Detail <i class="fa fa-chevron-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection