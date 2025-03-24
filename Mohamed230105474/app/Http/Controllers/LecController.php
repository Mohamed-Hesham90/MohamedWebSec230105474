<?php

// app/Http/Controllers/LecController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecController extends Controller
{
    public function lec01()
    {
        return view('lec.lec01');
    }

    public function lec02()
    {
        return view('lec.lec02');
    }

    public function lec03()
    {
        return view('lec.lec03');
    }

    public function lec04()
    {
        return view('lec.lec04');
    }

    public function lec05()
    {
        return view('lec.lec05');
    }
}
