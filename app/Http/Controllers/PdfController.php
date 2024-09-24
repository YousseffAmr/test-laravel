<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{

    public function generatePdf()
    {
        $data = [
            'name' => 'bruno',
            'nationality' => 'portugal'
        ];
        return Pdf::view('players/create', $data)->save(storage_path('app/public/1.pdf'));
        
    }

}
