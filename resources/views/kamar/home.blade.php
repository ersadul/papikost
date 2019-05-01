<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Tipe</th>
            <th>Nama Kamar</th>
            <th>Kapasitas</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        @foreach($kamar as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama_tipe }}</td>
            <td>{{ $k->nama_kamar }}</td>
            <td>{{ $k->maksimal }}</td>
            <td>{{ $k->harga }}</td>
            <td>edit | hapus </td>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <form action="/admin/kamar/store" method="post">
        {{csrf_field()}}
        <select name="tipe_kamar_id">
            <option value="">Pilih tipe kamar</option>
            @foreach($tipe as $t)
                <option value="{{$t->id}}">{{$t->nama_tipe}}</option>
            @endforeach
        </select>
        <input type="text" name="nama" placeholder="Nama Kamar" required>
        <input type="text" name="harga" placeholder="harga Kamar" required>
        <input type="submit" value="Save">
    </form>
</body>
</html>