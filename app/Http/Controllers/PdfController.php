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
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-bonbol.jpg'))),
            "title" => implode(" ", $arrayTitle),
            "header" => array_keys($requestData[0]),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('pdf.index', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('output.pdf');
    }
}
