@extends('layouts.dashboard')
@section('manajemen')
active
@endsection
@section('akun')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Akun
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Akun</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required name="nama" autocomplete="off">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection