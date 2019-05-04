<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT Kamar</title>
</head>
<body>
    @foreach($kamar as $k)
    <form action="">
        {{csrf_field()}}
        <input type="text" name="namaKamar" value="{{$k->nama_kamar}}">
        <input type="text" name="hargaKamar" value="{{$k->harga}}">
        <input type="text" name="namaGambar1">
        <input type="file" name="gambarDepan">
        <input type="submit" value="Edit">
    </form>
    @endforeach
</body>
</html>