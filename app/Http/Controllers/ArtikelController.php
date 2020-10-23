<?php

namespace App\Http\Controllers;

use App\ContentPackage;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = ContentPackage::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();

        $artikels = ContentPackage::with(['galleries'])->get();
        
        return view('pages.artikel', [
            'item' => $item,
            'artikels' => $artikels,
        ]);
    }
}
