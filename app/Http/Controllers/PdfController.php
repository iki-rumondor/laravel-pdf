<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{

    public function generatePdf($title, Request $request)
    {
        $requestData = $request->json()->all();
        $arrayTitle = explode("_", $title);
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-pesantren.jpg'))),
            "title" => implode(" ", $arrayTitle),
            "header" => array_keys($requestData[0]),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('pdf.index', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('output.pdf');
    }

    public function schoolFee(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-pesantren.jpg'))),
            "data" => $requestData,
        ];
        $pdf = PDF::loadView('pdf.school_fee', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('output.pdf');
    }

    public function absence(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-pesantren.jpg'))),
            "data" => $requestData,
            "jumlah_hari" => $requestData["jumlah_hari"],
        ];
        $pdf = PDF::loadView('pdf.absence_month', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('output.pdf');
    }
}
