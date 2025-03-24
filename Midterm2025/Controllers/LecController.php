<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecController extends Controller
{
    public function lec01() { return view('lec.lec-01'); }
    public function lec02() { return view('lec.lec-02'); }
    public function lec03() { return view('lec.lec-03'); }
    public function lec04() { return view('lec.lec-04'); }
    public function lec05() { return view('lec.lec-05'); }
}
