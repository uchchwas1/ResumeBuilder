<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeDetailsController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('resume', compact('user'));
    }

    public function download(){
        
        $user = auth()->user();
        //$pdf = \PDF::loadView('resume', $data);
        //$pdf = \PDF::loadView('resume', compact('user'));
        $pdf = \PDF::loadView('resume', compact('user'));
        return $pdf->download('resume.pdf');
       
    }
}
