@extends('layouts.app')
@section('content')
@include('components.header-1')

<!-- Page Banner Section Start -->
<div id="slider_full" class="overflow_hidden">
    <!-- Slide 1-->
    <div class="ls-slide"
        data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
        <img width="1920" height="1080" src="{{ asset('template/img/slider/1.jpg') }}" class="ls-bg" alt="" />

        <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
            class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;"
            class="ls-l text-default"
            data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Everything</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            is
            here right where</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            you
            need it</p>

        <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Welcome
            To Safa Guest House</p>

        <a style="" class="ls-l" href="#2" target="_self"
            data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            <p class="btn btn-default-bg"
                style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px">
                Explore
                Rooms
            </p>
        </a>

    </div>


    <!-- Slide 2-->
    <div class="ls-slide"
        data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:latest-works; kenburnszoom:out; kenburnsrotate:0; kenburnsscale:1.1; parallaxtype:3d; parallaxevent:scroll; parallaxdurationmove:500; parallaxrotate:4;">
        <img width="1920" height="1080" src="{{ asset('template/img/slider/2.jpg') }}" class="ls-bg" alt="" />

        <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
            class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;"
            class="ls-l text-default"
            data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Everything</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            is
            here right where</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            you
            need it</p>

        <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Welcome
            To Safa Guest House</p>

        <a style="" class="ls-l" href="#2" target="_self"
            data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            <p class="btn btn-default-bg"
                style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px">
                Explore
                Rooms
            </p>
        </a>

    </div>

    <!-- Slide 3-->
    <div class="ls-slide"
        data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;">
        <img width="1920" height="1080" src="{{ asset('template/img/slider/3.jpg') }}" class="ls-bg" alt="" />

        <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
            class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;"
            class="ls-l text-default"
            data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Everything</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            is
            here right where</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            you
            need it</p>

        <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Welcome
            To Safa Guest House</p>

        <a style="" class="ls-l" href="#2" target="_self"
            data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            <p class="btn btn-default-bg"
                style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px">
                Explore
                Rooms
            </p>
        </a>

    </div>


    <!-- Slide 4-->
    <div class="ls-slide"
        data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; deeplink:contact-us; kenburnszoom:in; kenburnsscale:1.2; parallaxevent:scroll;">
        <img width="1920" height="1080" src="{{ asset('template/img/slider/5.jpg') }}" class="ls-bg" alt="" />

        <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
            class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:290px; left:42px; white-space:normal;"
            class="ls-l text-default"
            data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Everything</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            is
            here right where</p>

        <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            you
            need it</p>

        <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:230px; left:42px; white-space:normal;"
            class="ls-l text-white"
            data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            Welcome
            To Safa Guest House</p>

        <a style="" class="ls-l" href="#2" target="_self"
            data-ls="showinfo:1; delayin:950; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
            <p class="btn btn-default-bg"
                style="font-weight:600; padding-top:15px; padding-bottom: 15px; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:Montserrat; font-size:15px; line-height:30px; top:557px; left:42px; border-radius: 3px">
                Explore
                Rooms
            </p>
        </a>

    </div>
</div>
<!-- Page Banner Section End -->
<!-- Property Search Section Start -->
<div class="full-row property-search-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <form action="{{ route('search') }}" class="w-100" method="post">
                        @csrf
                        <div class="row">
                            <div id="check-in" class="col-lg-6 col-sm-6">
                                <label class="text-white">Tanggal Check-in</label>
                                <input type="text" name="date1" class="date start form-control" placeholder="MM/DD/YYYY" required autocomplete="off">
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <label class="text-white">Lama Menginap</label>
                                <div class="quantity">
                                    <input type="number" name="lamaMenginap" class="form-control" min="1" max="50" step="1" value="1">
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-sm-2">
                                <input type="submit" class="btn btn-default-bg w-100 mt-30" value="Cari">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property Search Section End -->

<!-- Living Room 1 Section Start -->
<section class="full-row bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-area text-center mb-5">
                    <h2 class="title left-right-line mb-4">Promo</h2>
                    <span class="text-secondary">Anda dapat menikmati kamar yang telah kami sediakan dengan
                        penawaran
                        PROMO untuk kenyamanan menginap di SAFA House.</span>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($kamarPromo as $kp)
             <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
{{--                        <div class="overflow_hidden"><img src="{{ asset('storage') }}/{{$kp->thumbnail}}" alt="Booking Room"></div>--}}
                        <div class="overflow_hidden"><img src="{{ asset('img/promo/promo.png') }}" alt="Booking Room"></div>
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
            <!-- <div class="col-md-6 col-lg-4">
                <div class="room-thumb-grid-1 hover_zoom bg-white mb-30">
                    <div class="thumb-top position-relative">
                        <div class="overflow_hidden"><img src="{{ asset('template/img/squire/4.jpg') }}" alt="Booking Room">
                        </div>
                    </div>
                    <div class="room-info">
                        <div class="down-line-left mb-3">
                            <h6 class="title"><a class="text-primary" href="#">Promo 3</a></h6>
                            <span class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-md-12 mt-5"> <a href="{{ route('promo') }}" class="btn btn-lg-default x-center">Lihat Promo Lain</a>
            </div>
        </div>
    </div>
</section>
<!-- Living Room 1 Section End -->
@endsection
