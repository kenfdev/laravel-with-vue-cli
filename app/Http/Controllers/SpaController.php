<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function app1()
    {
        return view('spa/app1');
    }

    public function app2()
    {
        return view('spa/app2');
    }
}
