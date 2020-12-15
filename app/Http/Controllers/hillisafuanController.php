<?php

namespace App\Http\Controllers;

class hillisafuanController extends Controller
{
    public function one()
    {
        return view("hillisafuan-1");
    }

    public function two()
    {
        return view("hillisafuan-2");
    }

    public function three()
    {
        return view("hillisafuan-3");
    }

    public function index()
    {
        return view("test-tema"); // view dengan template
    }
}