<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function lab01() { return view('lab.lab-01'); }
    public function lab02() { return view('lab.lab-02'); }
    public function lab03() { return view('lab.lab-03'); }
    public function lab04() { return view('lab.lab-04'); }
    public function lab05() { return view('lab.lab-05'); }
}
