@extends('layouts.dashboard')
@section('housekeeping')
active
@endsection
@section('cleaning')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Cleaning Schedule
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cleaning Schedule</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        @foreach($jadwalCleaning as $jc)
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">{{$jc->nama_kamar}}</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>{{$jc->nama}} idnya {{$jc->invoice_id}}</td>
                            <td class="text-right">
                            <form action="{{route('dashboard.manajemen.akun.delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="idDeleteAkun" value="">
                                @if($jc->snack == 0)
                                <a href="#" onclick="$(this).closest('form').submit()">
                                    <span class="lb-cleaning"><i class="fa fa-coffee"></i></span>
                                </a>
                                @elseif($jc->snack == 1)
                                <a href="#" onclick="$(this).closest('form').submit()">
                                    <span class="lb-cleaning active"><i class="fa fa-coffee"></i></span>
                                </a>
                                @endif
                            </form>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 2</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 3</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 4</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 5</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 6</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 7</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 8</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 9</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 10</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 11</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 12</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 13</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 14</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 15</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 16</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 17</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header">
                    <h3 class="box-title">Kamar No. 18</h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <td>Akan Check-out</td>
                            <td class="text-right"><a href="#"><span class="lb-cleaning active"><i>Vacant Clean</i></span></a></td>
                        </tr>
                        <tr>
                            <td>Robert Willy</td>
                            <td class="text-right">
                                <a href="#"><span class="lb-cleaning active"><i class="fa fa-coffee"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-trash"></i></span></a>
                                <a href="#"><span class="lb-cleaning"><i class="fa fa-bed"></i></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
</section>
@endsection