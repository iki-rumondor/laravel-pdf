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

    </style>
</head>

<body>
    <div class="pb-3" style="border-bottom: 1px solid black">
        <table class="w-100">
            <tr>
                <td style="width: 10%">
                    <img width="100%" id="logo" src="data:image/png;base64,{{ $headerLogo }}" alt="Nama Gambar">
                </td>
                <td class="text-center lh-lg">
                    <span><b>YAYASAN PONDOK PESANTREN</b></span><br>
                    <span><b>PROVINSI GORONTALO</b></span><br>
                    <span><b>Jl. Prof. Ing. B.J. Habibie Kec. Tilongkabila, Kode Pos 96184</b></span>
                </td>
                <td style="width: 10%">
                </td>
            </tr>
        </table>
    </div>

    <h2 class="mt-4 mb-3">{{ $title }}</h2>
    <table class="table border">
        <tr class="border p-2">
            @foreach ($header as $item)
                <th class="border p-2">{{ $item }}</th>
            @endforeach
        </tr>

        @foreach ($values as $item)
            <tr class="border p-3">
                @foreach ($item as $i)
                    <td class="border p-2">{{ $i }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>

</html>
