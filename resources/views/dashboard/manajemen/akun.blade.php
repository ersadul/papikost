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
        <div class="box-header">
            <button type="button" id="btn-rev" class="btn btn-primary btn-flat btn-sm pull-right" data-toggle="modal"
                data-target="#akun"><i class="fa fa-plus-circle"></i> Tambah Akun</button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="25px">No</th>
                            <th>Nama</th>
                            <th>No.Telepon</th>
                            <th>E-mail</th>
                            <th width="120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nama Akun 1</td>
                            <td>08123456789</td>
                            <td>mail@mail.com</td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#edit-akun"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nama Akun 2</td>
                            <td>08123456789</td>
                            <td>mail@mail.com</td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#edit-akun"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nama Akun 3</td>
                            <td>08123456789</td>
                            <td>mail@mail.com</td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#edit-akun"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nama Akun 4</td>
                            <td>08123456789</td>
                            <td>mail@mail.com</td>
                            <td>
                                <div class="btn-action">
                                    <a href="#" class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                        data-target="#edit-akun"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-remove"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="akun">
        <div class="modal-dialog">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Akun</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Akun</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" required autocomplete="off">
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
    <div class="modal fade" id="edit-akun">
        <div class="modal-dialog">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Akun</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Akun</label>
                            <input type="text" class="form-control" required autocomplete="off" value="Nama Akun 1">
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" required autocomplete="off" value="08123456789">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required autocomplete="off" value="mail@mail.com">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" required autocomplete="off">
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
</section>
@endsection