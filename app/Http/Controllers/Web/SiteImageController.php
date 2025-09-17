<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\SiteImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteImageController extends Controller
{



    public function getImages()
    {
        // Get all images from one table
        $images = SiteImage::where('is_active', true)->get();
        // Group by type for easy use in blade 
        $grouped = $images->groupBy('type');
        // dd($grouped); 
        return view('web.home', compact('grouped'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(SiteImage::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'image' => 'required|image|max:2048',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'link' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        if ($request->type === 'banner' && SiteImage::where('type', 'banner')->count() >= 5) {
            return response()->json(['error' => 'Max 5 banners allowed'], 422);
        }

        $path = $request->file('image')->store('site_images', 'public');

        $image = SiteImage::create([
            'type' => $request->type,
            'image' => $path,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'is_active' => $request->is_active ?? true,
        ]);

        return response()->json($image, 201);
    }

    public function show(SiteImage $siteImage)
    {
        return response()->json($siteImage);
    }

    public function update(Request $request, SiteImage $siteImage)
    {
        $request->validate([
            'type' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'link' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($siteImage->image);
            $siteImage->image = $request->file('image')->store('site_images', 'public');
        }

        $siteImage->fill($request->only(['type', 'title', 'subtitle', 'link', 'is_active']));
        $siteImage->save();

        return response()->json($siteImage);
    }

    public function destroy(SiteImage $siteImage)
    {
        Storage::disk('public')->delete($siteImage->image);
        $siteImage->delete();

        return response()->json(null, 204);
    }
}
