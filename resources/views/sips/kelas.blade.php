<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembagian Kelas Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif !important
        }

        .border {
            border: 1px solid black;
        }

        #table-data tr,
        #table-data th,
        #table-data td {
            border: 1px solid black;
            padding: 10px;
        }

        .bold {
            font-weight: bold
        }
    </style>
</head>

<body>
    @include('sips.layouts')

    <div class="my-4 text-center bold">
        <span>Pembagian Kelas Mahasiswa Prodi Sistem Informasi</span><br>
    </div>

    <table id="table-data" class="table border">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Kelas</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nim'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['angkatan'] }}</td>
                <td>{{ $item['kelas'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
