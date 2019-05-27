@extends('layouts.dashboard')
@section('reservasi')
active
@endsection
@section('history.reservasi')
active
@endsection
@section('content')
<section class="content-header">
    <h1>
        History Reservasi
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">History Reservasi</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <div class="table-responsive" id="reservasi">
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
                                                        <p>Data Update : {{ $r->updated_at }}</p>
                                                        <p>Review : </p>
                                                        @if($r->review != '')
                                                        <textarea name="reviewBox" cols="30" rows="10">{{ $r->review }}</textarea>
                                                        @else
                                                        <form action="{{route('dashboard.history.review.edit')}}" method='post'>
                                                            @csrf
                                                            <input type="hidden" name="reviewBoxID" value="{{ $r->id }}">
                                                            <textarea name="reviewBox" cols="30" rows="10"></textarea>
                                                            <button type="submit">Edit</button>
                                                        </form>
                                                        @endif
                                                    </div>
                                                    <a class="pull-right" 
                                                        href="{{ route('dashboard.detail.reservasi', ['invoice_id' => $r->id, 'readonly' => true]) }}">
                                                        Lihat Detail <i class="fa fa-chevron-circle-right"></i>
                                                    </a>
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