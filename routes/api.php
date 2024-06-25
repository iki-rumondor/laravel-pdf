<?php

use App\Http\Controllers\MonevController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SipsController;
use App\Http\Controllers\SpeechController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generate-pdf/{title}', [PdfController::class, 'generatePdf']);
Route::post('/school-fee-pdf', [PdfController::class, 'schoolFee']);
Route::post('/absence-pdf', [PdfController::class, 'absence']);
Route::post('/note-pdf', [PdfController::class, 'note']);

// Route::post('/monev/rps', [MonevController::class, 'rpsReport']);

Route::prefix("/pdf/monev")->group(function(){
    Route::post('/plans', [MonevController::class, 'rpsReport']);
    Route::post('/modules', [MonevController::class, 'modulesReport']);
    Route::post('/tools', [MonevController::class, 'toolsReport']);
    Route::post('/skills', [MonevController::class, 'skillsReport']);
    Route::post('/facilities', [MonevController::class, 'facilitiesReport']);
    Route::post('/student-attendences', [MonevController::class, 'studentAttReport']);
    Route::post('/teacher-attendences', [MonevController::class, 'teacherAttReport']);
    Route::post('/plans-matching', [MonevController::class, 'plansMatching']);
    Route::post('/final', [MonevController::class, 'finalStudent']);
    Route::post('/passed', [MonevController::class, 'passedStudent']);
    Route::post('/grade', [MonevController::class, 'grade']);
});

Route::prefix("/pdf/sips")->group(function(){
    Route::post('kelas', [SipsController::class, 'kelas']);
    Route::post('mahasiswa', [SipsController::class, 'mahasiswa']);
});

Route::prefix("/pdf/speech")->group(function(){
    Route::post('class_students', [SpeechController::class, 'studentsByClass']);
});


