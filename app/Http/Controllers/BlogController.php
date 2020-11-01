<?php

namespace App\Http\Controllers;

use App\ContentPackage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $items = ContentPackage::with(['galleries'])
            ->orderBy('id', 'desc')
            ->paginate(3);

        return view('pages.blog', [
            'items' => $items
        ]);
    }
}
