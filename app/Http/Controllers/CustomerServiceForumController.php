<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceForumController extends Controller
{
    public function index()
    {
        return view('customerservice_forum');
    }
}
