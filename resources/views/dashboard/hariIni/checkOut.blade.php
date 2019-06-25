@extends('layouts.dashboard')
@section('hari.ini')
active
@endsection
@section('check.out')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Check-out
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Check-out</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach($checkOut as $i=>$co)
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-title">
                        <table id="info-table">
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$co->nama_kamar}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-tools pull-right">
                        <span class="label bg-green">Lunas</span>
                    </div>
                </div>
                <div class="box-body">
                    <p>{{$co->invoice_code}}</p>
                    <p>{{$co->nama}}</p>
                    <p>
                        <?php 
                            $extractDate = explode("-", $co->check_in);
                        ?>
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2], $extractDate[0])) }} 
                            - 
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2] + $co->lama_menginap, $extractDate[0])) }} 
                            ({{ $co->lama_menginap }} Malam)
                    </p>
                    <p>Request : {{$co->permintaan_khusus}}</p>
                    <!-- <p>Inclution : -</p> -->
                </div>
                <table class="table">
                    <tr class="text-center">
                        <td><a href="{{ route('dashboard.menginap.set.checkout', ['id' => $co->invoice_id]) }}">Check-out</a></td>
                        <td><a href="{{ route('dashboard.tambah.menginap', ['id' => $co->invoice_id]) }}">Tambah Lama Menginap</a></td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach
        <!-- <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-title">
                        <table id="info-table">
                            <tr>
                                <td>2</td>
                                <td>Standart Double</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-tools pull-right">
                        <span class="label bg-green">Lunas</span>
                    </div>
                </div>
                <div class="box-body">
                    <p>121831231237141</p>
                    <p>Pelanggan Pertama</p>
                    <p>5 Mei 2019 - 6 Mei 2019 (1 Malam)</p>
                    <p>Request : -</p>
                    <p>Inclution : -</p>
                </div>
                <table class="table">
                    <tr class="text-center">
                        <td><a href="#">Check-out</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-title">
                        <table id="info-table">
                            <tr>
                                <td>3</td>
                                <td>Standart Double</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-tools pull-right">
                        <span class="label bg-green">Lunas</span>
                    </div>
                </div>
                <div class="box-body">
                    <p>121831231237141</p>
                    <p>Pelanggan Pertama</p>
                    <p>5 Mei 2019 - 6 Mei 2019 (1 Malam)</p>
                    <p>Request : -</p>
                    <p>Inclution : -</p>
                </div>
                <table class="table">
                    <tr class="text-center">
                        <td><a href="#">Check-out</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-title">
                        <table id="info-table">
                            <tr>
                                <td>4</td>
                                <td>Standart Double</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-tools pull-right">
                        <span class="label bg-green">Lunas</span>
                    </div>
                </div>
                <div class="box-body">
                    <p>121831231237141</p>
                    <p>Pelanggan Pertama</p>
                    <p>5 Mei 2019 - 6 Mei 2019 (1 Malam)</p>
                    <p>Request : -</p>
                    <p>Inclution : -</p>
                </div>
                <table class="table">
                    <tr class="text-center">
                        <td><a href="#">Check-out</a></td>
                    </tr>
                </table>
            </div>
        </div> -->
    </div>
</section>
@endsection