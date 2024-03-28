<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class SipsController extends Controller
{

    public function mahasiswa(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "title" => $requestData["title"],
            "mahasiswa" => $requestData["mahasiswa"],
        ];
        $pdf = PDF::loadView('sips.mahasiswa', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('output.pdf');
    }

    public function kelas(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "data" => $requestData,
        ];
        $pdf = PDF::loadView('sips.kelas', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('output.pdf');
    }

}
