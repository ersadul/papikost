@extends('layouts.app')

@section('content')
@include('components.header-2')
<!-- Page Banner Section Start -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h3 class="banner-title text-white text-uppercase">Cek Pemesanan</h3>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Cek Pemesanan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
<section class="full-row bg-gray">
    <div class="container">
        <div class="full-row bg-white pb-0">
            <div class="container">
                <div class="contact-form-1 form-style-1 pt-4 pb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Kode Pesanan" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="No. Handphone" type="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary-bg">Cek Pesanan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6" id="cek-pesanan-desc">
                            <div>
                                <p>Lengkapi isian di samping untuk melakukan pengecekan pemesanan kamar SAFA House Anda.
                                </p>
                                <p>Kode pemesanan atau ID pemesanan adalah 13 digit angka yang terdapat di email
                                    pemesanan atau voucher menginap SAFA House yang dikirim ke alamat email Anda.</p>
                                <p>No. Handphone adalah nomor telepon / handphone yang digunakan ketika pemesanan kamar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection