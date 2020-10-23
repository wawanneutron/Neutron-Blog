<?php

namespace App\Http\Controllers\Admin;

use App\ContentPackage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'content_package' => ContentPackage::count(),
            'writer_admin_one' => ContentPackage::where('writer', 'wawan setiawan')->count(),
            'writer_admin_two' => ContentPackage::where('writer', 'arif kurniawan')->count(),

        ]);
    }
}
