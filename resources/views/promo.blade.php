@extends('layouts.app')
@section('content')
@include('components.header-2')
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h1 class="text-white">Promo</h1>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Promo</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="full-row bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-area text-center mb-5">
                    <h2 class="title left-right-line mb-4">Promo</h2>
                    <span class="text-secondary">Anda dapat menikmati kamar yang telah kami sediakan dengan penawaran
                        PROMO untuk kenyamanan menginap di SAFA House.</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($kamarPromo as $kp)
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        @if($kp->thumbnail < 1)
                            <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room"></div>
                        @else
                            <div class="overflow_hidden"><img src="{{ asset('storage') }}/{{$kp->thumbnail}}" alt="Booking Room"></div>
                        @endif
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">{{$kp->nama_kamar}}</a></h6>
                            <span class="subtext">{{$kp->deskripsi}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
