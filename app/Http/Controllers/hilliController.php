<?php

namespace App\Http\Controllers;

class hilliController extends Controller
{
    public function satu()
    {
        return view("hilli-1");
    }

    public function dua()
    {
        return view("hilli-2");
    }

    public function tiga()
    {
        return view("hilli-3");
    }
}