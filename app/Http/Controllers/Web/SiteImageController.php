<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\SiteImage;
use Illuminate\Http\Request;

class SiteImageController extends Controller
{
    //
    public function index()
    {
        // Get all images from one table
        $images = SiteImage::where('is_active', true)->get();

        // Group by type for easy use in blade
        $grouped = $images->groupBy('type');

        // dd($grouped);

        return view('web.home', compact('grouped'));
    }
}
