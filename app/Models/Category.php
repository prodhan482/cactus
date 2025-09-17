<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
        'name',
        'precedence',
        'image',
        'is_active',
        'description',
        'parent_id'
    ];

    // Parent relation
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Children relation (subcategories)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
