<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .border {
            border: 1px solid black;
        }

        #table-data tr,
        #table-data th,
        #table-data td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('pdf.layouts')

    <h2 class="my-4 text-center">Daftar Absensi</h2>
    <div class="my-3">
        <p>Tanggal : {{ $data["tanggal"] }}</p>
        <p>Waktu : {{ $data["waktu"] }}</p>
        <p>Kelas : {{ $data["kelas"] }}</p>
        <p>Mata Pelajaran : {{ $data["mapel"] }}</p>
        {{-- <p>Guru : {{ $data["nama"] }}</p> --}}
        <p>Tahun Ajaran : {{ $data["tahun_ajaran"] }}</p>
    </div>

    <table id="table-data" class="table border">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Keterangan</th>
        </tr>
        @foreach($data["siswa"] as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item["nis"] }}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["keterangan"] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
