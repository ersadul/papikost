@extends('layouts.dashboard')
@section('hari.ini')
active
@endsection
@section('menginap')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Sedang Menginap
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sedang Menginap</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach($sedangMenginap as $i=>$sm)
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <div class="box-title">
                        <table id="info-table">
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$sm->nama_kamar}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-tools pull-right">
                        <span class="label bg-green">Lunas</span>
                    </div>
                </div>
                <div class="box-body">
                    <p>{{$sm->invoice_code}}</p>
                    <p>{{$sm->nama}}</p>
                    <p>
                        <?php 
                            $extractDate = explode("-", $sm->check_in);
                        ?>
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2], $extractDate[0])) }} 
                            - 
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2] + $sm->lama_menginap, $extractDate[0])) }} 
                            ({{ $sm->lama_menginap }} Malam)
                    </p>
                    <p>Request : {{$sm->permintaan_khusus}}</p>
                </div>
                <!-- <table class="table">
                    <tr class="text-center">
                        <td><a href="{{ route('dashboard.menginap.set.checkout', ['id' => $sm->id]) }}">Check-out</a></td>
                    </tr>
                </table> -->
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
                        <td><a href="#">Edit Reservasi</a></td>
                    </tr>
                </table>
            </div>
        </div> -->
        <!-- <div class="col-md-4">
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
                        <td><a href="#">Edit Reservasi</a></td>
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
                        <td><a href="#">Edit Reservasi</a></td>
                    </tr>
                </table>
            </div>
        </div> -->
    </div>
</section>
@endsection