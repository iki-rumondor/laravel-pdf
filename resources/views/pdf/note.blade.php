<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <div class="pb-3" style="border-bottom: 1px solid black">
        <table class="w-100">
            <tr>
                <td style="width: 10%">
                    <img width="100%" id="logo" src="data:image/png;base64,{{ $headerLogo }}"
                        alt="Nama Gambar">
                </td>
                <td class="text-center lh-lg">
                    <span><b>YAYASAN PONDOK PESANTREN</b></span><br>
                    <span>PROVINSI GORONTALO</span><br>
                    <span>Jl. Prof. Ing. B.J. Habibie Kec. Tilongkabila, Kode Pos 96184</span>
                </td>
                <td style="width: 10%">
                </td>
            </tr>
        </table>
    </div>

    <h2 class="mt-4 mb-3">Nota Pembayaran SPP</h2>
    <p>Nama : {{ $data['nama'] }}</p>
    <p>Kelas : {{ $data['kelas'] }}</p>
    <table id="table-data" class="table border">
        <tr>
            <th>Tanggal Pembayaran</th>
            <th>Bulan</th>
            <th>Nominal</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>{{ $data['tanggal'] }}</td>
            <td>{{ $data['bulan'] }}</td>
            <td>{{ $data['nominal'] }}</td>
            <td>{{ $data['status'] }}</td>
        </tr>
    </table>
    <table class="mt-4 w-100">
        <tr>
            <td class="w-75" rowspan="3">
                <ul>
                    <li>Biaya Makan 3x Sehari. Setiap Bulan</li>
                    <li>Biaya Loundry Pakaian</li>
                    <li>Biaya SPP Sekolah</li>
                    <li>Biaya Buku Materi / Quran</li>
                    <li>Biaya Ekstrakulikuler</li>
                </ul>
            </td>
            <td class="w-25 text-center">Gorontalo, {{ $tanggal }}</td>
        </tr>
        <tr>
            <td class="text-center py-2">
                <img width="50%" id="logo" src="data:image/png;base64,{{ $ttd }}" alt="TTD" style="mix-blend-mode: multiply;">
            </td>
        </tr>
        <tr>
            <td class="text-center">Administrator</td>
        </tr>
    </table>
</body>

</html>
