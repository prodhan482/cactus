<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\NavMenu;
use App\Models\SiteImage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{




    public function index()
    {
        // ✅ Get site images
        $images = SiteImage::where('is_active', true)->get();
        $grouped = $images->groupBy('type');

        // ✅ Get navbar menus
        $navMenus = NavMenu::where('is_active', true)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get();

        // ✅ Get footer content
        $footerLogo = Footer::where('section', 'logo')->first();
        $footerQuickLinks = Footer::where('section', 'quick_links')->get();
        $footerHelpLinks = Footer::where('section', 'help_info')->get();
        $footerContact = Footer::where('section', 'contact')->first();

        // dd($footerLogo);

        // ✅ Return all in one compact
        return view('web.home', compact(
            'grouped',
            'navMenus',
            'footerLogo',
            'footerQuickLinks',
            'footerHelpLinks',
            'footerContact'
        ));
    }
}
