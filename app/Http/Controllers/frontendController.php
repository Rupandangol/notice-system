<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function mainPage()
    {
        return view('Frontend.pages.mainPage');
    }
}
