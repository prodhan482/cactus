<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavMenu extends Model
{
    protected $fillable = ['title', 'url', 'parent_id', 'order', 'is_active'];

    public function children()
    {
        return $this->hasMany(NavMenu::class, 'parent_id')->orderBy('order');
    }

    public function parent()
    {
        return $this->belongsTo(NavMenu::class, 'parent_id');
    }
}
