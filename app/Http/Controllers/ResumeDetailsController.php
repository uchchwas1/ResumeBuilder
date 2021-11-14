<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeDetailsController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('resume', compact('user'));
    }
}
