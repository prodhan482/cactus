<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\NavMenu;
use Illuminate\Http\Request;

class NavMenuController extends Controller
{
    public function index()
    {
        return response()->json(NavMenu::where('is_active', true)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get());
    }

    public function store(Request $request)
    {
        $menu = NavMenu::create($request->all());
        return response()->json($menu, 201);
    }

    public function show(NavMenu $navMenu)
    {
        return response()->json($navMenu->load('children'));
    }

    public function update(Request $request, NavMenu $navMenu)
    {
        $navMenu->update($request->all());
        return response()->json($navMenu);
    }

    public function destroy(NavMenu $navMenu)
    {
        $navMenu->delete();
        return response()->json(null, 204);
    }
}
