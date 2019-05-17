@extends('layouts.dashboard')
@section('hari.ini')
active
@endsection
@section('check.in')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Check-in
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Check-in</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach($checkIn as $i=>$c)
            {{-- cek apakah invoice expired --}}
            @if(strtotime(date('Y-m-d H:i:s')) > (strtotime($c->created_at) + 3600))
                @continue
            @endif
            <div class="col-md-4">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <div class="box-title">
                            <table id="info-table">
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $c->nama_kamar }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="box-tools pull-right">
                            @if($c->flag_payment == 1)
                                <span class="label bg-green">Lunas</span>
                            @else
                                <span class="label bg-yellow">Belum Lunas</span>
                            @endif
                        </div>
                    </div>
                    <div class="box-body">
                        <p>{{ $c->invoice_code }}</p>
                        <p>{{ $c->nama }}</p>
                        <p>
                            <?php 
                                $extractDate = explode("-", $c->check_in);
                            ?>
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2], $extractDate[0])) }} 
                            - 
                            {{ date('d M Y', mktime(0, 0, 0, $extractDate[1]  , $extractDate[2] + $c->lama_menginap, $extractDate[0])) }} 
                            ({{ $c->lama_menginap }} Malam)</p>
                        <p>Request : {{$c->permintaan_khusus}}</p>
                        <p>Inclution : -</p>
                    </div>
                    <table class="table">
                        <tr class="text-center">
                            <td><a href="#">Check-in</a></td>
                            <td><a href="#">Edit Reservasi</a></td>
                        </tr>
                    </table>
                </div>
            </div>    
        @endforeach
    </div>
</section>
@endsection