<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    protected $fillable = [
        'type',
        'image',
        'title',
        'subtitle',
        'link',
        'is_active'
    ];

    public static function getByType(string $type)
    {
        $query = self::where('type', $type)->where('is_active', true);

        if ($type === 'banner') {
            return $query->take(5)->get(); // max 5 banners
        }

        return $query->get();
    }
}
