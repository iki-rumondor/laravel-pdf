<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    @include('speech.layouts')

    <div class="mt-4 mb-2 text-center bold">
        <span>Daftar Tugas Mahasiswa</span><br>
    </div>

    <div class="mb-3">
        Nama Mahasiswa : {{$data[0]['student_answer']['student']['name']}}
    </div>

    <table id="table-data" class="table border">
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Judul Tugas</th>
            <th>Nilai</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['class']['name'] }}</td>
            <td>{{ $item['title'] }}</td>
            <td>{{ $item['student_answer']['grade'] }}</td>
            <td>{{ $item['student_answer']['ontime'] ? "Tepat Waktu" : "Terlambat" }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
