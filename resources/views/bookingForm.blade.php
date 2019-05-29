@extends('layouts.app')



@section('content')
    @include('components.header-2')
<!-- Header 4 Section End -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h1 class="text-white">Booking Form</h1>
            </div>
            <div class="col-sm-6">
                <ul class="pages-link">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Booking Form</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
@foreach($kamarByID as $kID)
<section class="full-row bg-gray" style="padding: 20px">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="full-row bg-white" id="page-banner-reserve">
                    <div class="container">
                        <div class="row">
                            <div class="room-detail-info">
                                <div class="float-left">
                                    <h3>{{$kID->nama_kamar}}</h3>
                                    <span>Classic room for our vip guest, also available for family touriest.</span>
                                </div>
                                <div class="float-right text-right">
                                    @if($kID->harga_promo < $kID->harga)
                                    <div class="amount-per-night"><b>Rp. {{$kID->harga_promo}} /</b> <span> malam </span></div>
                                    @else
                                    <div class="amount-per-night"><b>Rp. {{$kID->harga}} /</b> <span> malam </span></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="widget check-form">
                    <form action="{{ route('invoice') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h3>Isi Data Pemesanan</h3>
                            <input type="hidden" name="guestMasuk" value="{{$kamarTanggalMasuk}}">
                            <input type="hidden" name="guestDurasi" value="{{$kamarLamaMenginap}}">
                            <input type="hidden" name="totalHarga" value="{{$totalHarga}}">
                            <input type="hidden" name="kamarID" value="{{$kID->id}}">
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Nama Tamu</label>
                                <input required autocomplete="off" type="text" name="namaGuest" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Nama Kontak</label>
                                <input required autocomplete="off" type="text" name="namaKontakGuest" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">No. Handphone</label>
                                <input required autocomplete="off" type="tel" name="handphoneGuest" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Alamat E-Mail</label>
                                <input required autocomplete="off" type="email" name="emailGuest" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default-bg mt-3">Konfirmasi Pesanan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget check-form" id="form-verif">
                    <!-- <p id="text-desc">SAFA Kost & Guesthouse (ECO) <br> Jalan Danau Tondano Raya Blok F4 No.
                                    A14, Sawojajar, Malang, Kota Malang, Jawa Timur 65139.</p> -->
                    <table width="100%">
                        <tr>
                            <td>
                                <p class="text-secondary">Check-in</p>
                            </td>
                            <td width="70%">
                                <p class="text-right">{{$kamarTanggalMasuk}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-secondary">Lama Menginap</p>
                            </td>
                            <td>
                                <p class="text-right">{{$kamarLamaMenginap}} hari<br><small>(Check-out: 30 April 2019)</small></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-secondary">Rincian Pembayaran</p>
                            </td>
                            <td>
                                    @if($kID->harga_promo < $kID->harga)
                                    <p class="text-right">Rp. {{$kID->harga_promo}} x {{$kamarLamaMenginap}}</p>
                                    @else
                                    <p class="text-right">Rp. {{$kID->harga}} x {{$kamarLamaMenginap}}</p>
                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <hr><b>
                                    <p class="text-secondary">Total</p>
                                </b>
                            </td>
                            <td>
                                <hr><b>
                                    @if($kID->harga_promo < $kID->harga)
                                    <p class="text-right">Rp. {{$kID->harga_promo*$kamarLamaMenginap}}</p>
                                    @else
                                    <p class="text-right">Rp. {{$kID->harga*$kamarLamaMenginap}}</p>
                                    @endif
                                </b>
                            </td>
                        </tr>
                    </table>
                    <span class="btn btn-primary" style="cursor: auto">Total Pembayaran: Rp. {{$kID->harga*$kamarLamaMenginap}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
