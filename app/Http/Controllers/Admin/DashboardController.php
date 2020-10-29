<?php

namespace App\Http\Controllers\Admin;

use App\ContentPackage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        return view('pages.admin.dashboard', [

            'content_package' => ContentPackage::count(),

            'writer_admin_one' => ContentPackage::where('writer', FacadesAuth::user()->name)->count(),
            // 'writer_admin_two' => ContentPackage::where('writer', 'arif kurniawan')->count(),

        ]);
    }
}
