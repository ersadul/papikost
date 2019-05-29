@extends('layouts.app')
@section('content')
@include('components.header-2')
<!-- Page Banner Section Start -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h1 class="text-white">Room List</h1>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Rooms List</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Room List View 1 Start -->
<section class="full-row bg-white">
    <div class="container">
        @foreach($kamar as $k)
        <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden">
                        @if(is_null($k->thumbnail) || $k->thumbnail == "")
                            <img src="{{ asset('template/img/room/1.png') }}" alt="Booking Room">
                        @else
                            <img src="{{ asset('storage/'.$k->thumbnail) }}" alt="{{ $k->nama_tipe }}">
                        @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">{{ $k->nama_kamar }}</a></h5>
                                <span class="subtext">{{ $k->nama_tipe }} - {{ $k->maksimal }} Orang</span>
                            </div>
                            <p>{{$k->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        @if($k->harga > $k->harga_promo)
                            <div class="h5 per-night text-secondary"><strike>Rp. {{$k->harga}}<small> / Night</small></strike></div>
                            <div class="h5 per-night text-primary">Rp. {{$k->harga_promo}}<small> / Night</small></div>
                        @else
                            <div class="h5 per-night text-primary">Rp. {{$k->harga}}<small> / Night</small></div>
                        @endif
                        <form action="{{ route('room.detail', ['id' => $k->id_kamar]) }}" method="post">
                            @csrf
                            <input type="hidden" name="checkIn" value="{{$checkIn}}">
                            <input type="hidden" name="lamaMenginap" value="{{$lamaMenginap}}">
                            <input type="hidden" name="kamarID" value="{{$k->id_kamar}}">
                            <button type="submit" class="btn btn-default">Detail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/2.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Duplex Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$120<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/3.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Honeymoon Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$130<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/4.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Economy Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$127<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/5.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Delux Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$150<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/6.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Special Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$150<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-thumb-list-1 hover_zoom bg-white mb-30">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="overflow_hidden"><img src="{{ asset('template/img/room/7.png') }}" alt="Booking Room"></div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-7">
                    <div class="py-3 h-100">
                        <div class="room-info">
                            <div class="down-line-left mb-3">
                                <h5 class="title"><a class="text-primary" href="#">Luxury Room</a></h5>
                                <span class="subtext">Sami duble bed 2 window, mountain miew</span>
                            </div>
                            <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                Venenatis nostra
                                consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="for-booking">
                        <div class="h5 per-night text-primary">$180<small> / Night</small></div>
                        <a href="{{ route('room.detail') }}" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
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
        </div> -->
    </div>
</section>
<!-- Room List View 1 End -->
@endsection