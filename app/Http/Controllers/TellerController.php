<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TellerController extends Controller
{
    public function index()
    {
        return view('teller');
    }
}