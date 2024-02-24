<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #table-data {
            font-size: 10px
        }

        .border {
            border: 1px solid black;
        }

        #table-data tr,
        #table-data th,
        #table-data td {
            text-align: center;
            border: 1px solid black;

        }

        .padding {
            padding: 10px;
        }

        .no-padding {
            padding: 0px
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
                    <span>YAYASAN PONDOK PESANTREN</span><br>
                    <span>PROVINSI GORONTALO</span><br>
                    <span>Jl. Prof. Ing. B.J. Habibie Kec. Tilongkabila, Kode Pos 96184</span>
                </td>
                <td style="width: 10%">
                </td>
            </tr>
        </table>
    </div>

    <h2 class="my-4 text-center">
        ABSEN KEHADIRAN SISWA
        <hr>
        SEMESTER {{ Str::upper($data['semester']) }} T.A {{ $data['tahun_ajaran'] }}
    </h2>
    <table class="w-100">
        <tr>
            <td>
                <p>BULAN : {{ Str::upper($data['bulan']) }}</p>
            </td>
            <td class="text-center lh-lg">
                <p>KELAS : {{ Str::upper($data['kelas']) }}</p>
            </td>
        </tr>
    </table>
    <table id="table-data" class="table border">
        <tr class="padding">
            <th class="padding" rowspan="2">NO</th>
            <th class="padding" rowspan="2">NAMA</th>
            <th class="padding" colspan="{{ $jumlah_hari }}">TANGGAL</th>
            <th class="padding" colspan="3">KET</th>
        </tr>
        <tr>
            @for ($i = 1; $i <= $jumlah_hari; $i++)
                <th class="no-padding">{{ $i }}</th>
            @endfor
            <th>S</th>
            <th>I</th>
            <th>A</th>
        </tr>
        @foreach ($data['siswa'] as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nama'] }}</td>
                @foreach ($item['absensi'] as $abs)
                    @if ($abs['absensi'] == 'HADIR')
                        <td>.</td>
                    @elseif ($abs['absensi'] == 'SAKIT')
                        <td>S</td>
                    @elseif ($abs['absensi'] == 'IZIN')
                        <td>I</td>
                    @else
                        <td>A</td>
                    @endif
                @endforeach
                <td>{{ $item["jml_s"] }}</td>
                <td>{{ $item["jml_i"] }}</td>
                <td>{{ $item["jml_a"] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>