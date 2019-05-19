@extends('layouts.dashboard')
@section('housekeeping')
active
@endsection
@section('logbook')
active
@endsection

@section('content')
<section class="content-header">
    <h1>
        Logbook
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Logbook</li>
    </ol>
</section>

@endsection