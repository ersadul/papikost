@extends('layouts.dashboard')
@section('review')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Review
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Review</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#review"><i class="fa fa-plus-circle"></i> Tambah Review</button>
        </div>
        <div class="modal fade" id="review">
            <div class="modal-dialog">
                <form action="{{route('dashboard.review.tambah')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Review</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nomor Kamar</label>
                                <select name="reviewKamar" class="form-control" required autocomplete="off">
                                <option selected disabled>Pilih Kamar</option>
                                    @foreach($allKamar as $ak)
                                        <option value="{{$ak->id}}">{{$ak->nama_kamar}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" style="padding-bottom: 30px">
                                <label>Tanggal Menginap:</label>
                                <input type="text" name="tanggalReview" class="form-control pull-right" id="reservation" autocomplete="off"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea name="isiReview" rows="3" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left btn-flat"
                                data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="review">
                        @foreach($allReview as $ar)
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h5>{{$loop->iteration}}</h5>
                                            <small>Check-in Date : <b>{{$ar->tanggal_masuk_menginap}}</b></small><br>
                                            <small>Check-out Date : <b>{{$ar->tanggal_keluar_menginap}}</b></small>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <p><b>{{$ar->review}}</b></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h5>2</h5>
                                            <small>Check-in Date : <b>5 Mei 2019</b></small><br>
                                            <small>Check-out Date : <b>6 Mei 2019</b></small>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <p><b>Kamar mantap, berkualitas bintang 5. pertahankan!</b></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h5>3</h5>
                                            <small>Check-in Date : <b>5 Mei 2019</b></small><br>
                                            <small>Check-out Date : <b>6 Mei 2019</b></small>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <p><b>Kamar mantap, berkualitas bintang 5. pertahankan!</b></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h4>4</h4>
                                            <small>Check-in Date : <b>5 Mei 2019</b></small><br>
                                            <small>Check-out Date : <b>6 Mei 2019</b></small>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <p><b>Kamar mantap, berkualitas bintang 5. pertahankan!</b></p>
                                    </div>
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
</section>
@endsection