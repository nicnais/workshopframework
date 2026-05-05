<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    // PDF Landscape (Sertifikat)
    public function sertifikat()
    {
        $data = [
            'nama' => 'Nicholas',
            'judul' => 'Sertifikat Kelulusan'
        ];

        $pdf = Pdf::loadView('pdf.sertifikat', $data)
                  ->setPaper('A4', 'landscape');

        return $pdf->download('sertifikat.pdf');
    }

    // PDF Portrait + Header (Undangan)
    public function undangan()
    {
        $data = [
            'judul' => 'Undangan Resmi',
            'isi' => 'Anda diundang untuk menghadiri acara...'
        ];

        $pdf = Pdf::loadView('pdf.undangan', $data)
                  ->setPaper('A4', 'portrait');

        return $pdf->download('undangan.pdf');
    }
}