@extends('layouts.app')

@section('content')
    @include('components.header-2')
<!-- Page Banner Section Start -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h3 class="banner-title text-white text-uppercase">Room Details</h3>
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

<section class="full-row bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="room-item-details">
                    <div class="img-slide">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('template/img/width/36.jpg') }}" alt="Image not found!">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('template/img/width/39.jpg') }}" alt="Image not found!">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('template/img/width/40.jpg') }}" alt="Image not found!">
                                </div>
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
                            <h3>Classic Room</h3>
                            <span>Classic room for our vip guest, also available for family touriest.</span>
                        </div>
                        <div class="float-right text-right">
                            <div class="amount-per-night"><b>Rp. 125.000 /</b> <span> malam </span></div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                (20 Review)
                            </div>
                        </div>
                    </div>
                    <div class="text-block-1 mt-4">
                        <p>Ligula at posuere leo dictumst ad sollicitudin. Magna congue, leo, eros curabitur interdum
                            ante maecen facilisis
                            per maecenas mattis enim in nostra libero pede mauris neque varius ad ad inceptos. Erat
                            empor amet nisl scelerisque
                            maecenas fringilla ad ridiculus gravida. Arcu dignissim eros commodo ornare eget. Ligula
                            congue dolor placerat,
                            eu nibh dis dui, penatibus ac praesent tellus montes, lerisque, vulputate eros eu maecenas
                            lobortis per orci sit
                            Penatibus mauris senectus vulputate tincidunt cras feugiat class tempus eget ridiculus
                            vehicula dolor praesent.
                            Hymenaeos. Venenatis non litora feugiat suspendisse rutrum hymenaeos taciti praesent ut
                            velit. Cum pharetra nisl
                            nisi. Laoreet Montes.</p>
                        <p>Lorem suspendisse vestibulum dignissim sapien purus id massa. Dictumst. Fames commodo, metus.
                            Parturient leo
                            at aliquam. Tristique. Metus ultricies aliquam mi. Hendrerit libero malesuada dictumst,
                            massa consequat Volutpat
                            mattis condimentum ut aliquam. Magna litora augue purus class hymenaeos dis semper,
                            suspendisse euismod vehicula
                            vitae luctus nulla at orci nullam.</p>
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
                                        <li>Double Bed</li>
                                        <li>80 SqMt</li>
                                        <li>3 Persons</li>
                                        <li>Free Wifi</li>
                                        <li>Free Cable TV</li>
                                        <li>24/H Room Service </li>
                                    </ul>
                                    <ul class="icon-list-3">
                                        <li>Breakfast Include</li>
                                        <li>Private Balcony</li>
                                        <li>Guest Room</li>
                                        <li>Free Newspaper</li>
                                        <li>Full AC</li>
                                    </ul>
                                    <ul class="icon-list-3">
                                        <li>2 Bauth</li>
                                        <li>Mountain View</li>
                                        <li>CCTV Security</li>
                                        <li>Land Phone</li>
                                        <li>Flat Screen Tv</li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row photo-gallery mt-4">
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
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget check-form">
                    <form action="{{ route('booking.form') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h3>Mulai Reservasi</h3>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Tanggal Check-in</label>
                                <input type="text" disabled class="form-control" placeholder="24/06/2019">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Lama Menginap</label>
                                <input type="text" disabled class="form-control" placeholder="1 Malam">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Total Tagihan</label>
                                <input type="text" disabled class="form-control" placeholder="Rp. 125.000">
                            </div>
                            <input class="btn btn-default-bg" value="Pesan Sekarang" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection