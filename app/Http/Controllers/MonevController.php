<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MonevController extends Controller
{

    public function rpsReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.rps', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('rps.pdf');
    }

    public function modulesReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.modules', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('modules.pdf');
    }

    public function toolsReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.tools', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('tools.pdf');
    }

    public function skillsReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.skills', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('skills.pdf');
    }

    public function facilitiesReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.facilities', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('facilities.pdf');
    }

    public function studentAttReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.student_att', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('student_attendences.pdf');
    }

    public function teacherAttReport(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.teacher_att', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('teacher_attendences.pdf');
    }

    public function plansMatching(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.plans_matching', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('plans-matching.pdf');
    }

    public function finalStudent(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.final', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('final.pdf');
    }

    public function passedStudent(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.passed', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('passed.pdf');
    }

    public function grade(Request $request)
    {
        $requestData = $request->json()->all();
        $data = [
            "headerLogo" =>  base64_encode(file_get_contents(public_path('img/logo-ung.png'))),
            "values" => $requestData,
        ];
        $pdf = PDF::loadView('monev.grade', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('grade.pdf');
    }
}
