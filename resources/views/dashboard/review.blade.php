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
        <div class="box-body">

            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="review">
                        <tr>
                            <td>
                                <div class="box box-solid">
                                    <div class="box-body">
                                        <div class="text-center">
                                            <h4>1</h4>
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
                                            <h4>2</h4>
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
                                            <h4>3</h4>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</section>
@endsection