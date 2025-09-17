<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        return response()->json(Footer::where('is_active', true)->get());
    }

    public function store(Request $request)
    {
        $footer = Footer::create($request->all());
        return response()->json($footer, 201);
    }

    public function show(Footer $footer)
    {
        return response()->json($footer);
    }

    public function update(Request $request, Footer $footer)
    {
        $footer->update($request->all());
        return response()->json($footer);
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();
        return response()->json(null, 204);
    }
}
