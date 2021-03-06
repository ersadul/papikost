<?php
    $headerProfile = App\ProfileHotel::first();
?>
<!-- Header 4 Section Start -->
<header class="header-4 nav-on-top" id="header">
    <div class="top-header text-white py-2 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="float-left"><i class="fas fa-map-marker-alt"></i><span><small>
                    {{$headerProfile->alamat}}
                    </small></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <ul class="float-right">
                        <li><a href="mailto:mail@domain.com" class="text-white"><i
                                    class="fas fa-envelope"></i>mail@domain.com</a>
                        </li>
                        <li><a href="callto:+62-812-345-6789" class="text-white"><i
                                    class="fas fa-phone"></i>+62-812-345-6789</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-header bg-white">
        <div class="container">
            <div class="row">
               <a href="{{ route('index') }}"><nav class="navbar navbar-expand-lg navbar-light w-100"> <a class="navbar-brand" href="/"><img
                            class="nav-logo" src="{{ is_null($headerProfile->logo_hotel_file) || $headerProfile->logo_hotel_file == '' ? asset('template/img/logo/logoYourSpace.png') : asset('storage/'.$headerProfile->logo_hotel_file) }}" alt="{{ $headerProfile->nama_hotel }}"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item"> <a class="nav-link" href="{{ route('promo') }}">Promo</a> </li> -->
                            <!-- <li class="nav-item"> <a class="btn btn-primary-bg ml-2" href="{{ route('cek.pesanan') }}">Informasi Pemesanan</a>
                            </li> -->
                        </ul>
                        <!-- <a class="btn btn-default-bg ml-2" href="booking-form.php">Booking Now</a>  -->
                    </div>
                </nav></a>
            </div>
        </div>
    </div>
</header>
<!-- Header 4 Section End -->