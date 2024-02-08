<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    public function generatePdf(){
        $user = User::all();
        $data = [
            'title'=>'welcome to Abhi.com',
            'date' => date('d/m/Y'),
            'users'=> $user
        ];
        $pdf = PDF::loadView('mypdf',$data);
        return $pdf->download('abhi.pdf');
    }
}
