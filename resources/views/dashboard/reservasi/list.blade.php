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
            <div class="table-responsive" id="tb-custom">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservasi as $r)
                            <tr>
                                <td>
                                    <div class="box box-solid">
                                        <div class="box-body">
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <p class="pull-right"><b>Rp. {{ $r->final_harga }}</b></p>
                                                        <h4>{{ $r->nama }}</h4>
                                                        <p>Invoice #{{ $r->invoice_code }}</p>
                                                        <p>Status Update : {{ $r->payment_update }}</p>
                                                        @if( $r->status_menginap == "1" )
                                                            <small class="label label-success">Sedang Menginap</small>
                                                        @elseif( $r->status_menginap == "0" &&  $r->flag_payment == "1")
                                                            <small class="label label-success">Check In : {{$r->check_in}}</small>
                                                        @elseif( is_null($r->bukti_pembayaran_file) )
                                                            <small class="label bg-yellow">Menunggu Pembayaran</small>
                                                        @elseif( !is_null($r->bukti_pembayaran_file) )
                                                            <small class="label bg-primary">Menunggu Konfirmasi</small>
                                                        @elseif( date('d-m-Y H:i:s') > date('d-m-Y H:i:s', strtotime($r->created_at.' +1 Hour')) && !is_null($r->bukti_pembayaran_file))
                                                            <small class="label bg-red">Expired</small>
                                                        @endif
                                                    </div>
                                                    <a class="pull-right" href="{{ route('dashboard.detail.reservasi', ['invoice_id' => $r->id]) }}">Lihat Detail <i class="fa fa-chevron-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection