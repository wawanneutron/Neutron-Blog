<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.artikel');
    }
}
