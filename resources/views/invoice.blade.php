@extends('layouts.app')
@section('content')
    @include('components.header-2')

<section class="full-row bg-gray" style="padding: 20px" id="invoice">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="full-row bg-white" id="page-banner-reserve">
                    <div class="container">
                        <div class="row">
                            <div class="room-detail-info">
                                <div class="mb-3">
                                    <h3>Invoice #{{$invoice->invoice_code}}</h3>
                                    <span class="text-black">Dear <b>{{$invoice->nama}}</b>,
                                        <br>Terimakasih telah melakukan reservasi ruangan di YourSpace. Berikut informasi
                                        detail terkait data reservasi Anda. Jangan lupa screenshot halaman invoice ini untuk
                                        melakukan pembayaran. 
                                    </span>
                                </div>
                                <!-- <div class="bg-gray text-block-1 p-3">
                                    <table> -->
                                        <!-- <tr>
                                            <td width="50%">ID Reservasi</td>
                                            <td width="4%">:</td>
                                            <td>{{$invoice->invoice_code}}</td>
                                        </tr> -->

                                        <!-- <tr>
                                            <td>Status Reservasi</td>
                                            <td>:</td>
                                            <td>
                                                @if($invoice->flag_payment == 1)
                                                    @if($invoice->status_menginap == 1 )
                                                        <div class="text-success">Sedang menginap<div>
                                                    @elseif($invoice->status_menginap == 2 )
                                                        <div class="text-danger">Check out<div>
                                                    @else
                                                        <div class="text-success">Pembayaran diterima<div>
                                                    @endif
                                                @elseif($invoice->flag_payment < 1 && $invoice->bukti_pembayaran_file == null)
                                                    <div class="text-warning">Belum Mengupload Bukti Pembayaran</div>
                                                @elseif($invoice->flag_payment < 1 && $invoice->bukti_pembayaran_file != null)
                                                    <div class="text-warning">Menunggu Verifikasi Bukti Pembayaran oleh Admin</div>
                                                @endif
                                            </td>
                                        </tr> -->
                                    <!-- </table>
                                </div> -->
                                <div class="bg-gray text-block-1 p-3" id="desc-invoice">
                                    <table class="mb-3">
                                        <!-- <div class="float-right text-right">
                                            <span>Sisa waktu Pembayaran</span><br>
                                            <a id="time" href="#" class="btn btn-default-bg" style="cursor: auto"></a>
                                        </div> -->
                                        <!-- <tr>
                                            <td width="60%">Metode Pembayaran</td>
                                            <td width="4%">:</td>
                                            <td>Bank Transfer</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td>Jumlah Tagihan</td>
                                            <td>:</td>
                                            <td>
                                            @if($invoice->kamar->harga_promo < $invoice->kamar->harga && $invoice->kamar->harga_promo != null )
                                            Rp. {{$invoice->kamar->harga_promo}}
                                            @else
                                            Rp. {{$invoice->kamar->harga}}
                                            @endif
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td>Nama Bank</td>
                                            <td>:</td>
                                            <td>Bank Mandiri</td>
                                        </tr>
                                        <tr>
                                            <td>No. Rekening</td>
                                            <td>:</td>
                                            <td>1231231280301</td>
                                        </tr>
                                        <tr>
                                            <td>Batas Waktu Pembayaran</td>
                                            <td>:</td>
                                            <td>
                                                {{ date('d-M-Y H:i:s', strtotime("$invoice->created_at +24 Hour")) }}
                                            </td>
                                        </tr>
                                    </table>
                                    <span>Penting: <br>Mohon menyelesaikan pembayaran sebelum batas waktu pembayaran.
                                        Apabila melewati batas waktu, pemesanan Anda akan otomatis dibatalkan. Setelah
                                        melakukan pembayaran, mohon melakukan konfirmasi pembayaran melalui Contact Person
                                        dibawah.</span>
                                </div>
                                <div class="bg-gray text-block-1 p-3 mb-4" id="desc-invoice">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <p>Ruangan</p>
                                            </td>
                                            <td width="70%">
                                                <p class="text-right">{{$invoice->kamar->nama_kamar}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Masuk</p>
                                            </td>
                                            <td width="70%">
                                                <p class="text-right">{{ date('d-M-Y', strtotime("$invoice->check_in")) }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Durasi/Jam</p>
                                            </td>
                                            <td>
                                                <p class="text-right">{{$invoice->lama_menginap}} Jam</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Rincian Pembayaran</p>
                                            </td>
                                            <td>
                                                @if($invoice->kamar->harga_promo < $invoice->kamar->harga && $invoice->kamar->harga_promo)
                                                <p class="text-right">Rp. {{$invoice->kamar->harga_promo}} x {{ $invoice->lama_menginap }}</p>
                                                @else
                                                <p class="text-right">Rp. {{$invoice->kamar->harga}} x {{ $invoice->lama_menginap }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>
                                                    <p>Total</p>
                                                </b>
                                            </td>
                                            <td><b>
                                                @if($invoice->kamar->harga_promo < $invoice->kamar->harga && $invoice->kamar->harga_promo)
                                                <p class="text-right">Rp. {{$invoice->kamar->harga_promo * $invoice->lama_menginap}}</p>

                                                @else
                                                <p class="text-right">Rp. {{$invoice->kamar->harga * $invoice->lama_menginap}}</p>

                                                @endif
                                                </b>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- @if($invoice->bukti_pembayaran_file != null)
                                    <button class="btn btn-primary x-center" data-toggle="modal"
                                            data-target="#upload">Cek Bukti Pembayaran</button>
                                @else
                                    <button class="btn btn-primary x-center" data-toggle="modal"
                                            data-target="#upload">Konfirmasi Pembayaran</button>
                                @endif -->

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
                    @if(is_null($invoice->bukti_pembayaran_file))
                        <form action="{{route('upload.payment')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="paymentInvoiceID" value="{{$invoice->id}}">
                                    <input type="file" name="buktiPembayaran" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary-bg">Submit</button>
                            </div>
                        </form>
                    @else
                        <img src="{{ asset('/storage/'.$invoice->bukti_pembayaran_file) }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + " menit " + seconds + " detik";

        if (--timer < 1) {
            window.location = "{!! url('/') !!}"
        }
    }, 1000);
}

window.onload = function () {
    var sejam = 60 * 60 - {!! $duration !!},
        display = document.querySelector('#time');
    startTimer(sejam, display);
};
</script>
@endsection