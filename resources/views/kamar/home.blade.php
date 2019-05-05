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
            <th>Nama Kamar</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        @foreach($kamar as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama_kamar }}</td>
            <td>{{ $k->harga }}</td>
            <td>
                <a href="/admin/kamar/edit/{{$k->id}}">
                    edit | 
                </a>
                <a href="/admin/kamar/delete/{{$k->id}}">
                    hapus | 
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <form action="/admin/kamar/store" method="post">
        {{csrf_field()}}
        <select class="form-control" name="tipeKamar" data-parsley-required="true">
            @foreach ($tipeKamar as $tk) 
            {
                <option value="{{ $tk->id }}">{{ $tk->nama_tipe }}</option>
            }
            @endforeach
        </select>
        <input type="text" name="nama" placeholder="Nama Kamar" required>
        <input type="text" name="deskripsi" placeholder="Deskripsi Kamar" required>
        <input type="text" name="harga" placeholder="Harga Kamar" required>
        <input type="submit" value="Save">
    </form>
</body>
</html>