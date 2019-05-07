@extends('layouts.dashboard')







@section('reservasi')
active
@endsection














@section('list.reservasi')
active
@endsection















@section('content')
<section class="content-header">
    <h1>
        List Reservasi
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List Reservasi</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="table-responsive">
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
                                                    <p class="pull-right"><b>Rp. 125.000</b></p>
                                                    <h4>Pelanggan pertama</h4>
                                                    <p>Invoice #123912471</p>
                                                    <p>30 April 2019 20:03:58</p>
                                                </div>
                                                <a class="pull-right" href="#">Lihat Detail <i class="fa fa-chevron-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <p class="pull-right"><b>Rp. 125.000</b></p>
                                                    <h4>Pelanggan kedua</h4>
                                                    <p>Invoice #123912471</p>
                                                    <p>30 April 2019 20:03:58</p>
                                                </div>
                                                <a class="pull-right" href="#">Lihat Detail <i class="fa fa-chevron-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <p class="pull-right"><b>Rp. 125.000</b></p>
                                                    <h4>Pelanggan ketiga</h4>
                                                    <p>Invoice #123912471</p>
                                                    <p>30 April 2019 20:03:58</p>
                                                </div>
                                                <a class="pull-right" href="#">Lihat Detail <i class="fa fa-chevron-circle-right"></i></a>
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