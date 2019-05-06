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
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 1</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 2</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 3</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 4</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 5</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 6</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="x-center" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection