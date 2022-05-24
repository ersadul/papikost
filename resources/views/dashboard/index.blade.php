@extends('layouts.dashboard')
@section('index')
    active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid">
        <div class="box-body">
            <p>Halo <b>Admin!</b> Selamat Datang di Web Admin YourSpace.</p>
        </div>
    </div>
</section>
@endsection