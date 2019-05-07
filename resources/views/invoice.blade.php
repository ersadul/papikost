@extends('layouts.app')
@section('content')
    @include('components.header-2')

@foreach($invoice as $i)
<section class="full-row bg-gray" style="padding: 20px" id="invoice">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="full-row bg-white" id="page-banner-reserve">
                    <div class="container">
                        <div class="row">
                            <div class="room-detail-info">
                                <div class="mb-3">
                                    <h3>Invoice #{{$i->invoice_code}}</h3>
                                    <span class="text-black">Dear <b>{{$i->nama}}</b>,
                                        <br>Terimakasih telah melakukan pemesanan kamar di SAFA House. Berikut informasi
                                        detail terkait data pesanan Anda.
                                    </span>
                                </div>
                                <div class="bg-gray text-block-1 p-3">
                                    <table>
                                        <tr>
                                            <td width="45%">ID Pemesanan</td>
                                            <td width="4%">:</td>
                                            <td>{{$i->invoice_code}}</td>
                                        </tr>

                                        <tr>
                                            <td>Status Pemesanan</td>
                                            <td>:</td>
                                            <td>Menunggu Pembayaran</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="bg-gray text-block-1 p-3" id="desc-invoice">
                                    <table class="mb-3">
                                        <div class="float-right text-right">
                                            <span>Sisa waktu Pembayaran</span><br>
                                            <a href="#" class="btn btn-default-bg" style="cursor: auto">43 Menit</a>
                                        </div>
                                        <tr>
                                            <td width="60%">Metode Pembayaran</td>
                                            <td width="4%">:</td>
                                            <td>Bank Transfer</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Tagihan</td>
                                            <td>:</td>
                                            <td>Rp. {{$i->harga}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Bank</td>
                                            <td>:</td>
                                            <td>BCA</td>
                                        </tr>
                                        <tr>
                                            <td>No. Virtual Account</td>
                                            <td>:</td>
                                            <td>9123812301273123</td>
                                        </tr>
                                        <tr>
                                            <td>Batas Waktu Pembayaran</td>
                                            <td>:</td>
                                            <td>30 April 2019, 20:13</td>
                                        </tr>
                                    </table>
                                    <span>Penting: <br>Mohon menyelesaikan pembayaran sebelum batas waktu pembayaran.
                                        Apabila melewati batas waktu, pemesanan Anda akan otomatis dibatalkan. Setelah
                                        melakukan pembayaran, mohon melakukan konfirmasi pembayaran melalui tombol
                                        dibawah.</span>
                                </div>
                                <div class="bg-gray text-block-1 p-3 mb-4" id="desc-invoice">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <p>Kamar : </p>
                                            </td>
                                            <td width="70%">
                                                <p class="text-right">{{$i->nama_kamar}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Check-in</p>
                                            </td>
                                            <td width="70%">
                                                <p class="text-right">{{$i->check_in}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Lama Menginap</p>
                                            </td>
                                            <td>
                                                <p class="text-right">{{$i->lama_menginap}} Malam<br><small>(Check-out: 30 April
                                                        2019)</small></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Rincian Pembayaran</p>
                                            </td>
                                            <td>
                                                <p class="text-right">Rp. {{$i->harga}} x 1</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <hr><b>
                                                    <p>Total</p>
                                                </b>
                                            </td>
                                            <td>
                                                <hr><b>
                                                    <p class="text-right">Rp. {{$i->harga}}</p>
                                                </b>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <button class="btn btn-primary x-center" data-toggle="modal"
                                    data-target="#upload">konfirmasi Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="upload" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title">Upload Bukti Transfer Invoice #129181</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                    <input type="file" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary-bg">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection