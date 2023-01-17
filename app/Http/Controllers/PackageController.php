<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index()
    {
        $packages = Package::with('package_galleries', 'package_facilities')->get();
        $data = [
            'packages' => $packages,
            'title' => 'packages'
        ];

        return view('packages', $data);
    }
}
