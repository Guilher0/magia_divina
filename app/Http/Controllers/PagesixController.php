<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesixController extends Controller
{
    public function show()
    {
        return view('layouts.pagesix');
    }
}
