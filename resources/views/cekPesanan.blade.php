@extends('layouts.app')

@section('content')
@include('components.header-2')
<!-- Page Banner Section Start -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h1 class="text-white">Cek Reservasi</h1>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Cek Reservasi</li>
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
                @if($message = Session::get('fail'))
                    <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{$message}}</strong></div>
                @endif

                @if($message = Session::get('kadaluarsa'))
                    <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{$message}}</strong></div>
                @endif
                <!-- <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>isoo</strong></div> -->
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('hasil.invoice') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" name="invoiceCode" placeholder="Kode Pesanan" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" name="phone" placeholder="No. Handphone" type="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary-bg">Cek Reservasi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6" id="cek-pesanan-desc">
                            <div>
                                <p>Lengkapi isian di samping untuk melakukan pengecekan reservasi ruangan anda.
                                </p>
                                <p>Kode pemesanan atau ID pemesanan adalah 13 digit angka yang terdapat di email
                                    pemesanan.</p>
                                <p>No. Handphone adalah nomor telepon / handphone yang digunakan ketika reservasi ruangan.
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