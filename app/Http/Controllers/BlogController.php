<?php

namespace App\Http\Controllers;

use App\ContentPackage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $items = ContentPackage::with(['galleries'])->get();

        return view('pages.blog', [
            'items' => $items
        ]);
    }
}
