<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keikutsertaan Mahasiswa Pada UAS</title>
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
    @include('monev.layouts')

    <div class="my-4 text-center bold">
        <span>Monitoring Persentase Kelulusan Mahasiswa Per Mata Kuliah</span><br>
        <span>Semester {{ $values['semester'] }} TA {{ $values['year'] }}</span>
    </div>

    <table id="table-data" class="table border">
        <tr>
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>Jumlah Mahasiswa</th>
            <th>Jumlah Mahasiswa Lulus</th>
            <th>Persentase</th>
        </tr>
        @foreach ($values['data'] as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['subject'] }}</td>
                <td>{{ $item['amount'] }}</td>
                <td>{{ $item['passed'] }}</td>
                <td>{{ round(($item['passed'] / $item['amount']) * 100) }}%</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
