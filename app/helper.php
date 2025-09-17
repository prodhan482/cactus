<?php

use App\Models\SiteImage;

if (!function_exists('site_images')) {
    function site_images($type)
    {
        return SiteImage::getByType($type)->map(function ($img) {
            return [
                'url' => asset('storage/' . $img->image),
                'title' => $img->title,
                'subtitle' => $img->subtitle,
                'link' => $img->link,
                'is_active' => $img->is_active,
            ];
        });
    }
}
