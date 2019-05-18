@extends('layouts.app')

@section('content')
    @include('components.header-2')
<!-- Page Banner Section Start -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h1 class="text-white">Room Details</h1>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li><a href="javascript:history.back()">Rooms List</a></li>
                    <li>/</li>
                    <li>Room Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
@foreach($kamarByID as $kID)
<section class="full-row bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="room-item-details">
                    <div class="img-slide">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($gambar as $i => $g)
                                    <div class="carousel-item {{ $i==0 ? 'active' : '' }} ">
                                        <img src="{{ asset('storage/'.$g->gambar_file) }}" alt="{{ $g->nama_gambar }}">
                                    </div>
                                @endforeach
                                <!-- <div class="carousel-item">
                                    <img src="{{ asset('template/img/width/39.jpg') }}" alt="Image not found!">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('template/img/width/40.jpg') }}" alt="Image not found!">
                                </div> -->
                            </div>
                            <div class="slider-arrow">
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="room-detail-info bg-white">
                        <div class="float-left">
                            <h3>{{$kID->nama_kamar}}</h3>
                            <span>{{ $kID->nama_tipe }} - {{ $kID->maksimal }} Orang</span>
                            <div class="text-block-1 mt-4">
                                <p>{{$kID->deskripsi}}</p>
                            </div>
                        </div>
                        <div class="float-right text-right">
                            <div class="amount-per-night"><b>Rp. {{$kID->harga}} /</b> <span> malam </span></div>
                            <!-- <div class="review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (20 Review)
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-menu-1 mt-4">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fasilitas">Fasilitas</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="fasilitas" class="tab-pane active">
                                <div class="bg-white p-30">
                                    <ul class="icon-list-3">
                                        @foreach($fasilitas as $f)
                                            <li>{{ $f->nama_fasilitas }}</li>    
                                        @endforeach
                                    </ul>
                                    <!-- <ul class="icon-list-3">
                                        <li>Breakfast Include</li>
                                        <li>Private Balcony</li>
                                        <li>Guest Room</li>
                                        <li>Free Newspaper</li>
                                        <li>Full AC</li>
                                    </ul> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="row photo-gallery mt-4">
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/36.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/36.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/39.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/39.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/40.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/40.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/36.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/36.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/39.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/39.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img_view mb-30" href="img/width/40.jpg') }}">
                                <div class="overlay-1">
                                    <img src="{{ asset('template/img/width/40.jpg') }}" alt="">
                                    <span class="text-default xy-center"><i class="fa fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget check-form">
                    <form action="{{ route('booking.form') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h3>Mulai Reservasi</h3>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Tanggal Check-in : {{$kamarTanggalMasuk}}</label>
                                <input type="hidden" name="guestMasuk" class="form-control" value="{{$kamarTanggalMasuk}}" >
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Lama Menginap : {{$kamarLamaMenginap}}</label>
                                <input type="hidden" name="guestDurasi" class="form-control" value="{{$kamarLamaMenginap}}">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Total Tagihan : {{$kID->harga}} x {{$kamarLamaMenginap}} </label>
                                <input type="hidden" name="guestHarga" class="form-control" value="{{$kID->harga*$kamarLamaMenginap}}">
                            </div>
                                <input type="hidden" name="kamarId" class="form-control" value="{{$kID->id_kamar}}">
                            <button type="submit" class="btn btn-default-bg">Pesan Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection