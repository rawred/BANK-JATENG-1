<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TellerForumController extends Controller
{
    public function index()
    {
        return view('teller_forum');
    }
}