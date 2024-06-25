<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class SpeechController extends Controller
{

    public function studentsByClass(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "data" => $requestData,
        ];
        $pdf = PDF::loadView('speech.student_class', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('output.pdf');
    }

}
