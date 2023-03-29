<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $packages = Package::with('downloads')->get();

        return view('dashboard', compact('packages'));
    }
}
