@extends('layouts.app')



@section('content')
    @include('components.header-2')
<!-- Header 4 Section End -->
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
            <div class="col-sm-6">
                <h3 class="banner-title text-white text-uppercase">Booking Form</h3>
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


<section class="full-row bg-gray" style="padding: 20px">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="full-row bg-white" id="page-banner-reserve">
                    <div class="container">
                        <div class="row">
                            <div class="room-detail-info">
                                <div class="float-left">
                                    <h3>Classic Room</h3>
                                    <span>Classic room for our vip guest, also available for family touriest.</span>
                                </div>
                                <div class="float-right text-right">
                                    <div class="amount-per-night"><b>Rp. 125.000 /</b> <span> malam </span></div>
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
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Nama Tamu</label>
                                <input required type="text" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Nama Kontak</label>
                                <input required type="text" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">No. Handphone</label>
                                <input required type="tel" class="form-control">
                            </div>
                            <div class="form-group" class="col-lg-12 col-sm-12">
                                <label class="text-block-1">Alamat E-Mail</label>
                                <input required type="email" class="form-control">
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
                                <p class="text-right"><?php echo $tanggalMasuk?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-secondary">Lama Menginap</p>
                            </td>
                            <td>
                                <p class="text-right"><?php echo $durasiMenginap?><br><small>(Check-out: 30 April 2019)</small></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-secondary">Rincian Pembayaran</p>
                            </td>
                            <td>
                                <p class="text-right">Rp. <?php echo $hargaMenginap?> x 1</p>
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
                                    <p class="text-right">Rp. <?php echo $hargaMenginap?></p>
                                </b>
                            </td>
                        </tr>
                    </table>
                    <span class="btn btn-primary" style="cursor: auto">Total Pembayaran: Rp. <?php echo $hargaMenginap?></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection